<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\http\Controllers\ProductController;
use App\http\Controllers\LoginController;
use App\http\Controllers\RegistrationController;
use App\http\Controllers\ContactControllers;

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

//nav-bar
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/service',[ProductController::class, 'service'])->name('service');
Route::get('/product',[ProductController::class, 'product'])->name('product');
Route::get('/contact',[ProductController::class, 'contact'])->name('contact');
Route::get('/teams',[ProductController::class, 'ourTeams'])->name('teams');
Route::get('/about',[ProductController::class, 'about'])->name('about');

//login
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/hone',[LoginController::class, 'loginValidator'])->name('loginValidator');

//registration
Route::get('/registration',[RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'userCreate'])->name('userCreate');

//users
Route::get('/users',[RegistrationController::class, 'users'])->name('users');

//Contact
Route::post('/contact', [ContactControllers::class, 'contactUs'])->name('contactUs');
