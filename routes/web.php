<?php

use Illuminate\Support\Facades\Route;




Route::get('/', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
Route::get('/delete', [App\Http\Controllers\ProductController::class, 'deleteproduct'])->name('delete');
Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'addproduct'])->name('add-product');

Route::post('/update', [App\Http\Controllers\ProductController::class, 'updateproduct'])->name('update');

