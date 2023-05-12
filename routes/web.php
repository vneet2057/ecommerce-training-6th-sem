<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class,'index']);
Route::get('/view-product/{id}', [UserController::class,'viewProduct']);

Route::post('/add-to-cart/{id}', [CartController::class,'addToCart']);
Route::get('/delete-cart-item/{id}',[CartController::class,'destroy']);


Route::get('/checkout', [CheckoutController::class,'checkout']);
Route::post('/place-order', [CheckoutController::class,'placeOrder']);

Route::get('/pay-with-khalti/{price}/{order_id}', [CheckoutController::class,'payWithKhalti']);

Route::get('/update-order/{id}',[CheckoutController::class,'updateOrder']);

Route::post('/change-order-details/{id}',[OrderController::class,'changeOrderDetails']);




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
