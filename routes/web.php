<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VueController;
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

// User
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/profile/{name}', [UserController::class, 'profile'])->name('users.profile');
Route::get('/users/register', [UserController::class, 'register'])->name('users.register');
Route::post('/users/register', [UserController::class, 'store'])->name('users.store');

// Vue
Route::get('/vue', [VueController::class, 'index'])->name('vue.index');
