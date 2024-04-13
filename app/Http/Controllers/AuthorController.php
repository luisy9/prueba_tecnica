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
}
