<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
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
Route::get('/product/index',[ProductController::class,'index'])->name('product.index');
Route::get('/product/show/{product}',[ProductController::class,'show'])->name('product.show');
Route::get('/product/byCategory/{category}', [ProductController::class, 'byCategory'])->name('product.bycategory');
Route::get('/product/byGender/{gender}', [ProductController::class, 'byGender'])->name('product.bygender');
Route::get('ricerca/annuncio',[ProductController::class,'searchProduct'])->name('products.search');

/*ROTTE USERS*/
 Route::middleware(['auth'])->group(function () {
 Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
 });

Route::get('product/gender/{gender}/{category}',[ProductController::class,'filterBygender'])->name('product.gender');

Route::get('product/category/{category}/{gender}',[ProductController::class,'filterBycategory'])->name('product.category');


/*AMMINISTRAZIONE*/
Route::middleware(['is.admin'])->group(function () {
Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

Route::patch('/accetta/annuncio/{product}',[AdminController::class,'acceptProduct'])->name('admin.accept_product');

Route::patch('/rifiuta/annuncio/{product}',[AdminController::class,'rejectProduct'])->name('admin.reject_product');

Route::post('/admin/reverse/{product}', [AdminController::class,'setReverseProduct'])->name('admin.reverse');

Route::delete('/elimina/annuncio/{product}',[AdminController::class,'deleteProduct'])->name('admin.delete');
});


//MAIL

Route::get('/contatti',[ContactController::class,'contact'])->name('contatti');
Route::post('/contatti/nuovo',[ContactController::class,'newContact'])->name('contatti.nuovo');
