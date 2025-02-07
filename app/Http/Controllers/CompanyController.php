<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'company_name' => 'required|string|max:255',
        //     'company_number' => 'required|string|max:255',
        //     'status' => 'required|in:Active,Inactive',
        //     'phone' => 'required|string|max:15',
        //     'email' => 'required|email|unique:companies,email'
        // ]);

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company added successfully.');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        // $request->validate([
        //     'company_name' => 'required|string|max:255',
        //     'company_number' => 'required|string|max:255',
        //     'status' => 'required|in:Active,Inactive',
        //     'phone' => 'required|string|max:15',
        //     'email' => 'required|email|unique:companies,email,' . $company->id
        // ]);
        // dd($request->all()); // Debugging line

        $company->update($request->all());

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
