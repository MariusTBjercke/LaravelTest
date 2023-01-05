<?php

use App\Http\Controllers\UserController;
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

// User routes
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/profile/{name}', [UserController::class, 'profile']);
Route::get('/users/register', [UserController::class, 'register'])->name('users.register');
Route::post('/users/register', [UserController::class, 'store'])->name('users.store');

