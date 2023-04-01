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

Route::get('/', static function () {
    return view('welcome');
})->name('welcome');

Route::get('/books', [BookController::class, 'index'])->name('books');

Route::get('/books-new', [BookController::class, 'indexNew'])->name('books-new');

Route::get('/books/{id}', [BookController::class, 'show'])->name('book');

Route::get('/others', [HomeController::class, 'others'])->name('others');

Route::get('/livewire', [HomeController::class, 'livewire'])->name('livewire');

Route::get('/components', [HomeController::class, 'components'])->name('components');
