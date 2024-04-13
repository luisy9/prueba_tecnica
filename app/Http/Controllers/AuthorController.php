<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __invoke()
    {
        $data = 'Authors';
        //Cogemos todos los datos de author
        $authors = Author::all();
        return view("authors", compact("data", "authors"));
    }

    public function create(Request $request)
    {
        try {
            $validarData = $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $author = Author::create([
                'name' => $validarData['name'],
            ]);

            return redirect()->route('author.create')->with('success', 'Author created successfully!');
        } catch (\Exception $e) {
            return redirect()->route('author.create')->with('error', 'Author is required.');
        }

    }
}
