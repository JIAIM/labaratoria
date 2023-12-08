<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabaController;

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

Route::get('/index', [LabaController::class,'index']);
Route::get('/visits', [LabaController::class,'visits']);
Route::get('/create_visit', [LabaController::class,'create_visit']);
Route::post('/store_visit', [LabaController::class,'store_visit']);
Route::get('/documentation', [LabaController::class,'documentation']);
Route::get('/contracts', [LabaController::class,'contracts']);
Route::get('/instruments', [LabaController::class,'instruments']);
Route::get('/visits/create', [LabaController::class,'index']);


//Route::get('/product', [ProductController::class,'product']);
//Route::get('/contact', [ProductController::class,'contact']);
//Route::get('/about_us', [ProductController::class,'about_us']);
//Route::get('/syrokopcheni/{data}', [ProductController::class,'syrokopcheni']);
//Route::get('/basket', [ProductController::class,'basket']);
//Route::get('/phone-menu', [ProductController::class,'phone']);
//Route::get('/layout/type_syrokopcheni.blade.php/{name}/{value}/', [ProductController::class,'show']);
//Route::get('/add/{name}/{num}', [ProductController::class,'add']);
//Route::get('/del/{num}', [ProductController::class,'delete']);
//Route::get('/complete', [ProductController::class,'complete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
