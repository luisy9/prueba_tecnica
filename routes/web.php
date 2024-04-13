<?php

use App\Http\Controllers\AuthorController;
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
    $data = 'home';
    return view('home', compact('data'));
});

Route::get('/authors', AuthorController::class);
Route::get('/books', BookController::class);

Route::get('/books/create', [BookController::class, 'create']);
Route::get('/authors/create', [AuthorController::class, 'create']);