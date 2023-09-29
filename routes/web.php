<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [ProductController::class, 'home'])->name('welcome');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/index',[ProductController::class,'index'])->name('product.index');
Route::get('/product/show/{product}',[ProductController::class,'show'])->name('product.show');
Route::get('/product/byCategory/{category}', [ProductController::class, 'byCategory'])->name('product.bycategory');
