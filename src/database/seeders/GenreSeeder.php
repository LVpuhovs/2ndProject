<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'Fiction']);
        Genre::create(['name' => 'Mystery']);
        Genre::create(['name' => 'Adult']);
        Genre::create(['name' => 'Fantasy']);
        Genre::create(['name' => 'Adventure']);
        Genre::create(['name' => 'Comedy']);
        Genre::create(['name' => 'Drama']);
        Genre::create(['name' => 'Romance']);
    }
}
