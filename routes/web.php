<?php
use App\Http\Controllers\CompanyController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/companies/search', [CompanyController::class, 'search'])->name('companies.search');


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('companies', CompanyController::class);
});