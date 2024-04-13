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

    public function showid(Request $request)
    {
        $id = $request->id;
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    public function edit(Request $request, $id)
    {

        try {
            $validarData = $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $author = Author::findOrFail($id);
            /*Actualizamos unicamente el campo de name, para tener un mayor control sobre los campos
            y no actualizar campos innecesarios */
            $author->name = $request->input('name');
            $author->save();
            return redirect()->route('authors')->with('success', 'Author deleted successfully');

        } catch (\Exception $e) {
            return redirect()->route('edit', $id)->with('error', 'Cannot update the author');
        }
    }

    public function delete(Request $request, $id)
    {
        try {
            $author = Author::findOrFail($id);
            $author->delete();
            return redirect()->route('authors')->with('success', 'Successfuly deleted Author!');
        } catch (\Exception $e) {
            return redirect()->route('authors')->with('error', 'Cannot delete the author');
        }
    }
}
