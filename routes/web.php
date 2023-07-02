<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::redirect('/', '/Login-View');

Route::view('/Login-View', 'Login')->name('LoginView');
Route::view('/Registration-View', 'Registration')->name('RegistrationView');
Route::view('/Home', 'Home')->name('HomeView');

Route::post('/Registration-Form', [UserController::class, 'register'])->name('register-form');
Route::post('/Login-Form', [UserController::class, 'login'])->name('login-form');
Route::get('/Logout', [UserController::class, 'logout'])->name('logout-form');

Route::post('/Create-Post', [PostController::class, 'createPost'])->name('create-post');
