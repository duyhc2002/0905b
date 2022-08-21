<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index']);
Route::post('/buy-foods', [HomeController::class, 'buy_foods']);
Route::get('/thanks', [HomeController::class, 'thanks']);
//product
Route::get('list', [ProductController::class, 'index']);
Route::get('add', [ProductController::class, 'add']);
Route::post('save', [ProductController::class, 'save']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('update/{id}', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);
//home

Route::post('login-form',[RegisterController::class,'login_form']);
Route::get('index1',[ProductController:: class,'index1']);
Route::get('about1', [ProductController::class, 'about']);
Route::get('blog1',[ProductController:: class,'blog']);
Route::get('contact1',[ProductController::class,'contact']);
Route::get('login',[ProductController::class,'login']);
Route::get('logout',[RegisterController::class,'logout']);

Route::get('recipe1',[ProductController::class,'recipe']);
Route::get('admin',[AdminController:: class, 'dashboard']);
//producers
Route::get('producers-list', [ProducerController::class, 'index']);
Route::get('producers-add', [ProducerController::class, 'add']);
Route::post('producers-save', [ProducerController::class, 'save']);
Route::get('producers-edit/{id}', [ProducerController::class, 'edit']);
Route::post('producers-update/{id}', [ProducerController::class, 'update']);
Route::get('producers-delete/{id}', [ProducerController::class, 'delete']);
//login admin
Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::post('loginProcess', [AdminController::class, 'loginProcess']);
Route::get('logout-admin', [AdminController::class, 'logout_admin']);

//signin
Route::get('register', [ProductController::class,'register']);
Route::post('register-form', [RegisterController::class,'register_form']);