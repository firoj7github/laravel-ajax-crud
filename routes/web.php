<?php

use Illuminate\Support\Facades\Route;




Route::get('/', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'addproduct'])->name('add-product');
