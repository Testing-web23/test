<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;

// Route API untuk Orders
Route::apiResource('orders', OrderController::class);

// Route API untuk Products
Route::apiResource('products', ProductController::class);

// Route API untuk Categories
Route::apiResource('categories', CategoryController::class);

// Route API untuk Posts
Route::apiResource('posts', PostController::class);

// Route API untuk Customers
Route::apiResource('customers', CustomerController::class);

Route::apiResource('customer', CustomerController::class);
