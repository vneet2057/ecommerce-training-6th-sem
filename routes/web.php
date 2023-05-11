<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// admin routes to dashboard
Route::get('/dashboard',[AdminController::class,'dashboard']);


// categories routes
Route::get('/categories',[CategoryController::class,'index']);
Route::post('/categories/store',[CategoryController::class,'store']);
Route::get('/categories/edit/{id}',[CategoryController::class,'edit']);
Route::post('/categories/update/{id}',[CategoryController::class,'update']);
Route::get('/categories/delete/{id}',[CategoryController::class,'destroy']);

// products routes
Route::get('/products',[ProductController::class,'index']);
Route::post('/products/store',[ProductController::class,'store']);
Route::get('/products/edit/{id}',[ProductController::class,'edit']);
Route::post('/products/update/{id}',[ProductController::class,'update']);
Route::get('/products/delete/{id}',[ProductController::class,'destroy']);

// orders routes
Route::get('/orders',[OrderController::class,'index']);
