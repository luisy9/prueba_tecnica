<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    
    Route::get('/books/create', function () {
        $data = 'create';
        return view('books.create', compact('data'));
    });
    
    Route::get('/authors/create', function () {
        $data = 'create';
        return view('authors.create', compact('data'));
    });
    
    //Rutas authores
    Route::get('/authors/{id}/edit', [AuthorController::class,'showid'])->name('edit');
    Route::put('/authors/{id}', [AuthorController::class, 'edit'])->name('authors.update');
    Route::post('/authors/create', [AuthorController::class, 'create'])->name('author.create');
    Route::delete('/authors/{id}', [AuthorController::class, 'delete'])->name('authors.delete');
    
    //Rutas books
    Route::get('/books/create', [BookController::class, 'showAuthorsName'])->name('books.authors');
    Route::post('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::get('/books/{id}/edit', [BookController::class, 'showItemsBook'])->name('books.edit');
    Route::put('/books/{id}', [BookController::class, 'edit'])->name('books.update');
    
    Route::get('/authors', AuthorController::class)->name('authors');
    Route::get('/books', BookController::class);
