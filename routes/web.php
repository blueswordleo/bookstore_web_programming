<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [BookController::class,'home']);
Route::get('/BookDetail/{id}', [BookController::class, 'Detail']);
Route::get('/Category/{id}', [CategoryController::class, 'DetailCategory']);
Route::get('/Contact', [CategoryController::class, 'Contact']);
Route::get('/Publisher', [PublisherController::class, 'Publishers']);
