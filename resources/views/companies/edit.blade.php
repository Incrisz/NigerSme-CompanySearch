@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Company</h2>
    <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Company Name:</label>
            <input type="text" name="company_name" value="{{ $company->company_name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Company Number:</label>
            <input type="text" name="company_number" value="{{ $company->company_number }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status:</label>
            <select name="status" class="form-control">
                <option value="Active" {{ $company->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="Inactive" {{ $company->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Update Company</button>
    </form>
</div>
@endsection
