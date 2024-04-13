<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert(
            ['title' => "Harry Poter and the Philosopher's of Stone"],
            ['title' => 'Harry Poter and the Chamber of Secrets'],
            ['title' => 'Harry Potter and the Prisoner of Azkaban'],
            ['title'=> 'Harry Potter and the Goblet of Fire'],
            ['title'=> 'Harry Potter and the Order of the Phoenix'],
            ['title'=> 'Harry Potter and the Half-Blood Prince'],
            ['title'=> 'Harry Potter and the Deathly Hallows'],
            ['title'=> 'Atomic Habits'],
            ['title'=> 'Deep Work'],
        );
    }
}
