<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;

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
})->name('welcome');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware(['auth'])->group(function(){
    Route::resource('/category',CategoryController::class);
    Route::resource('/size',SizeController::class);
    Route::resource('/color',ColorController::class);
    Route::resource('/user',UserController::class);
    Route::resource('/logo',LogoController::class);
    Route::resource('/banner',BannerController::class);
    Route::resource('/product',ProductController::class);
});

