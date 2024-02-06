<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/add_book', [BookController::class, 'addBook'])->name('add_book');
Route::post('/add_book', [BookController::class, 'saveBook'])->name('add_book');
Route::get('/added_successfully/{id}', [BookController::class, 'addSuccess'])->name('added_successfully');
Route::get('/delete_book/{id}', [BookController::class, 'deleteBook'])->name('delete_book');
Route::get('/update_book/{id}', [BookController::class, 'updateBook'])->name('update_book');
Route::post('/update_book/{id}', [BookController::class, 'saveUpdate'])->name('update_book');
Route::get('/view_book/{id}', [BookController::class, 'viewBook'])->name('view_book');
