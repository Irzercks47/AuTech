<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
//view
Route::get('/', function () {
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
});


//product
Route::get('/products_view', function () {
    $products = DB::table('products')->get();
    return view('products_view', ['products' => $products]);
});

//authentication
Route::get('/account', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/account', [LoginController::class, 'authenthicate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
