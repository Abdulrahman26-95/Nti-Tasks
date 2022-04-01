<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::get('dashboard/products/create', [ProductController::class, 'create'])->name('dashboard.products.create');
Route::get('dashboard/products', [ProductController::class, 'index'])->name('dshboard.products.index');
Route::get('dashboard/products/edit', [ProductController::class, 'edit'])->name('dashboard.products.edit');
