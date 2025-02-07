<?php
use App\Http\Controllers\CompanyController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/companies/search', [CompanyController::class, 'search'])->name('companies.search');

Route::resource('companies', CompanyController::class);
