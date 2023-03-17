<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books');

Route::get('/books-new', [BookController::class, 'indexNew'])->name('books-new');

Route::get('/books/{id}', [BookController::class, 'view'])->name('book');

Route::get('/others', [BookController::class, 'others'])->name('others');
