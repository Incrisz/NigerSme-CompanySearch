@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Company Management</h2>
    <a href="{{ route('companies.create') }}" class="btn btn-success mb-3">Add New Company</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Company Name</th>
                <th>Company Number</th>
                <th>Status</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $company->company_name }}</td>
                    <td>{{ $company->company_number }}</td>
                    <td class="{{ $company->status == 'Active' ? 'text-success' : 'text-danger' }}">
                        {{ $company->status }}
                    </td>
                    <td>{{ $company->phone }}</td>
                    <td>{{ $company->email }}</td>
                    <td>
                        <a href="{{ route('companies.edit', $company) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
