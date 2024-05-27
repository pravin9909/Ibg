<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

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


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('custom.auth')->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', function () {
    return view('auth/reset');
})->name('forgot-password');

Route::get('/reset-message', [AuthController::class, 'resetRequest'])->name('reset-message');

Route::get('/categories', [CategoryController::class, 'index'])->middleware('custom.auth')->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->middleware('custom.auth')->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->middleware('custom.auth')->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->middleware('custom.auth')->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->middleware('custom.auth')->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->middleware('custom.auth')->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->middleware('custom.auth')->name('categories.destroy');
