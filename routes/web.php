<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\client;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/orderdetails/{id}', [admin::class, 'Orderdetails'])->name('Orderdetails');
    Route::get('/single_menu/{id}', [admin::class, 'single_menu']);
    Route::get('/orderlist',[admin::class, 'orderlist']
    )->name('Orderdetails');
    Route::get('/managemenu', [admin::class,'managemenu'])->name('managemenu');
    Route::get('/addmenu',[admin::class, 'addmenu'])->name('addmenu');
});
Route::delete('/remove',[admin::class,'deletemenu']);
Route::post('/storemenu',[admin::class, 'store_menu'])->name('storemenu');

Route::get('/index', [client::class, 'index'])->name('home');
Route::get('/cart/{id}', [client::class, 'cart'])->name('cart');
Route::get('checkout',[client::class,'checkout'])->name('checkout');
 Route::post('checkout',[client::class,'order'])->name('order');
require __DIR__.'/auth.php';
