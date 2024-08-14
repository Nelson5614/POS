<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\InventryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' ,function() {
    return Inertia::render('CustomLoginPage');
});
Route::get('/sidebar' ,function() {
    return Inertia::render('CustomDashboard');
});

Route::get('/dashboard/sales', [SalesController::class, 'index'])->name('dashboard.sales');
Route::resource('/staff', StaffController::class);
Route::resource('/inventry', InventryController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
