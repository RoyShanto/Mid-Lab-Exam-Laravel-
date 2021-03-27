<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
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

Route::get('/abc.com', [ProductController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'verify']);

Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/show_product/{id}', [ProductController::class, 'show_product'])->middleware('sess');

route::get('/registration', [RegistrationController::class, 'index']);
route::post('/registration', [RegistrationController::class, 'store_user']);

