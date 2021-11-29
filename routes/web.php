<?php

use App\Http\Controllers\Book\BookController;
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

Route::get('/',[BookController::class,'index'])->name('book.index');
Route::get('/create', [BookController::class, 'create'])->name('book.create');
Route::post('/store', [BookController::class, 'store'])->name('book.store');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::post('/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('/delete/{id}', [BookController::class, 'delete'])->name('book.delete');
