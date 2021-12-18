<?php

use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Home;
use App\Http\Livewire\Contact;
use App\Http\Livewire\History;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductCategory;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', Home::class);

Route::get('/product', ProductIndex::class);
Route::get('/product/{product}', ProductDetail::class);
Route::get('/product/category/{category}', ProductCategory::class);

Route::get('/contact', Contact::class);

Route::get('/cart', Cart::class)->middleware('auth');
Route::get('/cart/checkout', Checkout::class)->middleware('auth');
Route::get('/cart/checkout/history', History::class)->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');

Route::resource('/dashboard/product', ProductController::class)->middleware('admin');
Route::resource('/dashboard/category', CategoryController::class)->except('show')->middleware('admin');

Route::get('/dashboard/order', [OrderController::class, 'index'])->middleware('admin');
Route::get('/dashboard/order/{order}/edit', [OrderController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/order/{order}', [OrderController::class, 'update'])->middleware('admin');

Route::get('/dashboard/user', [UserController::class, 'index'])->middleware('admin');
