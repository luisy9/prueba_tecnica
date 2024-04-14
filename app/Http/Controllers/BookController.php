<?php

namespace App\Http\Controllers;

use App\Models\Author;
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


    public function showAuthorsName()
    {
        $authors = Author::all();
        return view("books.create", compact("authors"));
    }


        public function create(Request $request)
        {
            try {
                $validarData = $request->validate([
                    'title' => 'required|string|max:255',
                    'author_name' => 'required|string|max:255',
                ]);

                $book = Book::create([
                    'title' => $validarData['title'],
                    'author_id' => $validarData['author_name'],
                ]);
                return redirect()->route('books.create')->with('success', 'Book created successfully!');
            } catch(\Exception $e) {
                return redirect()->route('books.create')->with([
                    'error1'=> __('validacionesBook.isRequired'),
                    'error2'=> __('validacionesBook.authorSelect'),
                ]);
            }

        }

}