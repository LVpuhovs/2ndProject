<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class DataController extends Controller
{
    // Returns 3 published Book objects in random order
    public function getTopBooks()
    {
        $books = Book::where('display', true)
            ->inRandomOrder()
            ->take(3)
            ->get();
        
        //var_dump($books);
        //exit();
        return $books;
    }

    // Returns the selected Book object, if it’s published
    public function getBook(Book $book)
    {
        $selectedBook = Book::where([
            'id' => $book->id,
            'display' => true,
        ])->firstOrFail();
        //dd($books);    
        return $selectedBook;
    }

    // Returns 3 published Book objects in random order - except the selected one
    public function getRelatedBooks(Book $book)
    {
        $books = Book::where('display', true)
            ->where('id', '<>', $book->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        //dd($books);
        return $books;
    }
}