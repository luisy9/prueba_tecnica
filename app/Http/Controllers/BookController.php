<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __invoke()
    {
        $data = 'Books';
        //Cogemos todos los datos de author
        $books = Book::with('author')->get();
        return view("books", compact("data", "books"));
    }


  
}
