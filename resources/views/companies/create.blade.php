@extends('layouts.app')

@section('title', 'Table create') <!-- Define the page title -->

@section('content')
<div class="container">
    <h2>Add New Company</h2>
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Company Name:</label>
            <input type="text" name="company_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Company Number:</label>
            <input type="text" name="company_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status:</label>
            <select name="status" class="form-control">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Company</button>
    </form>
</div>
@endsection
