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

Route::get('/test', function() {
    return view('test', [
        'name' => 'Kulgutt94',
    ]);
});

Route::get('/users/{name}', [UserController::class, 'index']);
Route::get('/users/new', [UserController::class, 'store']);
Route::post('/users', [UserController::class, 'store']);
