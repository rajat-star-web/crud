<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');   
});

Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products',[ProductController::class,'store'])->name('products.store');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{product}',[ProductController::class,'update'])->name('products.update');
Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('products.destroy');
Route::get('/products/{product}',[ProductController::class,'view'])->name('products.view');
Route::view('/auth/login','auth.login')->name('login');
Route::view('/auth/register','auth.register')->name('register');
Route::post('/auth/register',[ProductController::class,'register'])->name('register.post'); 