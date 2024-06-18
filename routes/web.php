<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ShelvingController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('libraries', LibraryController::class);
Route::resource('topics', TopicController::class);
Route::resource('shelvings', ShelvingController::class);
Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
Route::resource('copies', CopyController::class);