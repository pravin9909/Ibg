<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [CategoryController::class, 'showCategories'])->name('home');


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

 
Route::get('/products', [ProductController::class, 'index'])->middleware('custom.auth')->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('custom.auth')->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->middleware('custom.auth')->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->middleware('custom.auth')->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('custom.auth')->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->middleware('custom.auth')->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('custom.auth')->name('products.destroy');

// Route::get('/categories', [CategoryController::class, 'showCategories'])->name('categories.show');
Route::get('/products/category/{id}', [ProductController::class, 'getProductsByCategory'])->name('products.byCategory');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');


// Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('products/listing', [ProductController::class, 'index'])->name('products.listing');
Route::resource('products', ProductController::class);
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// Product routes
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/filter', [ProductController::class, 'filter'])->name('products.filter');

