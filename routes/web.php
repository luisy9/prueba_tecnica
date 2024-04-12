<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/authors', function () {
    $data = 'authors';
    return view('authors', compact('data'));
});

Route::get('/books', function () {
    $data = 'books';
    return view('books', compact('data'));
});

// Route::get('/authors', function() {
//     return view('authors');
// });

// Route::get('/books', function() {
//     return view('books');
// });

// Route::get('/', function() {
//     return view('');
// });

// Route::get('/', function() {
//     return view('');
// });

// Route::get('/', function() {
//     return view('');
// });