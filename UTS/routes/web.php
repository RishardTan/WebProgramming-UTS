<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'showall']);
Route::get('/book/{id}', [BookController::class, 'showbook']);
Route::get('/publishers', [PublisherController::class, 'showall']);
Route::get('/publisher/{id}', [PublisherController::class, 'showpublisher']);
Route::get('/category/{id}', [CategoryController::class, 'showcategory']);
Route::get('/contact', [BookController::class, 'view_contact']);
