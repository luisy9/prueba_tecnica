<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            ['title' => "Harry Poter and the Philosopher's of Stone", "author_id" => "5"],
            ['title' => 'Harry Poter and the Chamber of Secrets', "author_id" => "5"],
            ['title' => 'Harry Potter and the Prisoner of Azkaban', "author_id" => "5"],
            ['title'=> 'Harry Potter and the Goblet of Fire', "author_id" => "5"],
            ['title'=> 'Harry Potter and the Order of the Phoenix', "author_id" => "5"],
            ['title'=> 'Harry Potter and the Half-Blood Prince', "author_id" => "5"],
            ['title'=> 'Harry Potter and the Deathly Hallows', "author_id" => "5"],
            ['title'=> 'Atomic Habits', "author_id" => "6"],
            ['title'=> 'Deep Work', "author_id" => "7"],
        ]);
    }
}
