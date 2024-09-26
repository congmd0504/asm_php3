<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//Client
Route::get('/', [IndexController::class, 'index'])->name('client.index');
Route::get('/index', [IndexController::class, 'index'])->name('client.index');
Route::get('/shop', [IndexController::class, 'shop'])->name('client.shop');
Route::get('/shop/{id}', [IndexController::class, 'shop'])->name('client.shop.id');
Route::get('/show/{id}', [IndexController::class, 'show'])->name('client.show');
Route::get('/contact', function () {
    return view('client.contact');
})->name('client.contact');

//Admin
//Category
Route::get('admin/categories/index', [CategoryController::class, 'index'])->name('categories.index');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('admin/categories/create', [CategoryController::class, 'store'])->name('categories.store');
Route::get('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('admin/categories/edit/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('admin/categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Product
Route::get('admin', [ProductController::class, 'index'])->name('admin');
Route::get('admin/products/index', [ProductController::class, 'index'])->name('products.index');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('admin/products/create', [ProductController::class, 'store'])->name('products.store');
Route::get('admin/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('admin/products/edit/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('admin/products/show/{id}', [ProductController::class, 'show'])->name('products.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
