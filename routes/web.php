<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
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

Route::prefix('/')->group(function(){
    Route::get('/', ["App\\Http\\Controllers\\HomeController" , "index"])->name('home');
    Route::get('/chinh-sach-bao-hanh',function (){
        return view('home.chinh-sach-bao-hanh');
    })->name('chinh-sach-bao-hanh');
    Route::get('/huong-dan-tra-gop',function (){
        return view('home.huong-dan-tra-gop');
    })->name('huong-dan-tra-gop');
    Route::get('/huong-dan-thanh-toan',function (){
        return view('home.huong-dan-thanh-toan');
    })->name('huong-dan-thanh-toan');
    Route::get('tim-kiem', ["App\\Http\\Controllers\\SearchController" , "search"])->name('search');
});
Route::prefix('/user')->group(function(){
    Route::get('/logout', ["App\\Http\\Controllers\\User\\UserController", "logOut"])->name('user.logout');
});
Route::prefix('/product')->group(function(){
    Route::get('/{slug}', ["App\\Http\\Controllers\\Product\\ProductController" , "index"])->name('product.index');
});
Route::prefix('/cart')->group(function() {
    Route::get('/', ["App\\Http\\Controllers\\Cart\\CartController", "index"])->name('cart.index');
    Route::post('/add', ["App\\Http\\Controllers\\Cart\\CartController", "add"])->name('cart.add');
    Route::post('/remove', ["App\\Http\\Controllers\\Cart\\CartController", "remove"])->name('cart.remove');
    Route::post('/update', ["App\\Http\\Controllers\\Cart\\CartController", "update"])->name('cart.update');
});
Route::prefix('/admin')->group(function() {
    Route::get('/', ["App\\Http\\Controllers\\Admin\\AdminController", "index"])->name('admin.index');
    Route::get('/product', ["App\\Http\\Controllers\\Admin\\ProductController", "index"])->name('admin.product.index');
});

