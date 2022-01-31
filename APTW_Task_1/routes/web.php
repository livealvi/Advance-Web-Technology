<?php

use Illuminate\Support\Facades\Route;

// Product Controller
use App\http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/serivce',[ProductController::class, 'serivce'])->name('serivce');

Route::get('/product',[ProductController::class, 'product'])->name('product');

Route::get('/contact',[ProductController::class, 'contact'])->name('contact');

Route::get('/teams',[ProductController::class, 'ourTeams'])->name('teams');

Route::get('/about',[ProductController::class, 'about'])->name('about');

 
