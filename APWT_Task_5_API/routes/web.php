<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactControllers;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;


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
Route::get('/', [LoginController::class, 'index'])->name('/');
Route::get('/home', [ProductController::class, 'home'])->name('home');
Route::get('/service', [ProductController::class, 'service'])->name('service');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/contact', [ProductController::class, 'contact'])->name('contact');
Route::get('/teams', [ProductController::class, 'ourTeams'])->name('teams');
Route::get('/about', [ProductController::class, 'about'])->name('about');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginValidator'])->name('loginValidator');
//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//registration
//create
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/users', [RegistrationController::class, 'userCreate'])->name('user-create');

//users 
//get - all
Route::get('/users', [UsersController::class, 'users'])->name('users');
//edit
//get - single
Route::get('/user-edit/{id}', [RegistrationController::class, 'userEdit'])->name('user-edit');
//add
Route::get('/user/add/', [RegistrationController::class, 'addUsers'])->name('user-add');
Route::post('/user/add/', [RegistrationController::class, 'userCreate'])->name('user-add');
//update
Route::post('/user-update', [RegistrationController::class, 'userUpdate'])->name('user-update');
//delete
Route::get('/user-delete/{id}', [RegistrationController::class, 'userDelete'])->name('user-delete');

//teacher  courses
//get - all
Route::get('/teachers', [TeacherController::class, 'teachers'])->name('teachers');
Route::get('/teachers/courses/{id}', [TeacherController::class, 'teacherCourses'])->name('teachers.courses');
//dashboard
Route::get('/teachers', [TeacherController::class, 'teachers'])->name('teachers');

//admin
Route::get('/admin/dashboard', [AdminController::class, 'getAllUser'])->name('admin-dashboard');


//courses
Route::get('/courses', [CourseController::class, 'courseTeacher'])->name('courses.teacher');

//Contact
Route::post('/contact', [ContactControllers::class, 'contactUs'])->name('contactUs');

//no-permission
Route::get('/no-permission', [LoginController::class, 'noPermission'])->name('no-permission');
