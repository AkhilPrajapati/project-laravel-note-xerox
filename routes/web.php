<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {return view('welcome');});

///////////AUTHENTICATION ROUTES//////////////////
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';


////////// TEST HOME PAGE ROUTE/////////////////
Route::get('/', [MyController::class, 'home']);

////////// BACKEND ROUTES//////////////////////
Route::get('/dashboard', function() {return view('backend.dashboard');})->middleware(['auth', 'verified']);

//BACKEND PRODUCT
Route::get('/admin/product', [ProductController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/admin/product/create', [ProductController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/admin/product', [ProductController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->middleware(['auth', 'verified']);
Route::post('/admin/product/{id}', [ProductController::class, 'update'])->middleware(['auth', 'verified']);
Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->middleware(['auth', 'verified']);

//BACKEND ORDER
Route::get('/admin/order', [OrderController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/admin/order/edit/{id}', [OrderController::class, 'edit'])->middleware(['auth', 'verified']);
Route::post('/admin/order/{id}', [OrderController::class, 'update'])->middleware(['auth', 'verified']);
Route::get('/admin/order/delete/{id}', [OrderController::class, 'delete'])->middleware(['auth', 'verified']);



Route::get('/admin/order/download/{id}', [OrderController::class, 'download'])->middleware(['auth', 'verified']);




//FRONTEND ORDER
Route::get('/order/create/{id}', [OrderController::class, 'create']);
Route::post('/order', [OrderController::class, 'store']);
Route::get('/orderall', [OrderController::class, 'createall']);
Route::post('/orderall', [OrderController::class, 'storeall']);

//FRONTEND PRODUCTS
Route::get('/service', [MyController::class, 'service']);
Route::get('/product', [MyController::class, 'product']);
Route::get('/about', [MyController::class, 'about']);



