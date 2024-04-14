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
        } catch (\Exception $e) {
            return redirect()->route('books.create')->with([
                'error1' => __('validacionesBook.isRequired'),
                'error2' => __('validacionesBook.authorSelect'),
            ]);
        }

    }

    public function showItemsBook(Request $request, $id)
    {
        $book = Book::findOrFail($id); // Donde $id es el ID del libro que deseas obtener
        $title = $book->title;
        $id = $book->id;
        $authorName = $book->author->name;

        /* Hacemos una consulta para recoger todos los autores menos el del libro actual
            para que no se repita el nombre
        */
        $allAuthors = Author::whereNotIn('name', [$authorName])->get();
        return view('books.edit', compact('id', 'title', 'authorName', 'allAuthors'));
    }

    public function edit(Request $request, $id)
    {
        try{
            $book = Book::findOrFail($id);
            $book->title = $request->input('title');
            $book->author_id = $request->input('author_name');
            $book->save();
            return redirect()->route('books')->with('success', 'Book edited successfully');

        }catch (\Exception $e) {
            return redirect()->route('books.edit', $id)->with('error', 'Cannot update the author');
        }

    }

}