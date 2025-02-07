@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Search Companies</h2>
    <form action="{{ route('companies.search') }}" method="GET">
        <div class="mb-3">
            <input type="text" name="query" class="form-control" placeholder="Search by name, email, or company number" value="{{ request('query') }}">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    @if(request('query')) 
        @if(isset($companies) && $companies->isNotEmpty())
            <h3 class="mt-4">Search Results</h3>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Company Number</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->company_name }}</td>
                            <td>{{ $company->company_number }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="mt-3">No results found for "{{ request('query') }}"</p>
        @endif
    @endif
</div>
@endsection
