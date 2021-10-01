<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

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

//TESTING
Route::get('/test', [TestController::class, 'testFunction']);

//Views
Route::get('/add-user', [UserController::class, 'getAddUserForm']);

//DB CRUD
Route::post('/insert', [UserController::class, 'insertAction']);
Route::get('/show/{id}', [UserController::class, 'showAction']);
Route::get('/delete/{id}', [UserController::class, 'deleteAction']);
Route::get('/update/{id}', [UserController::class, 'updateAction']);
Route::get('/showall', [UserController::class, 'showAllAction']);



