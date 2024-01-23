<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __construct()
    {
     $this->middleware('auth');
    }
    
    public function index()
    {
        $genres = Genre::orderBy('name', 'asc')->get();
        return view('genres.index', ['genres' => $genres]);
    }
    public function list()
 {
    $items = Genre::orderBy('name', 'asc')->get();
    return view(
    'genre.list',
    [
    'title' => 'Genres',
    'items' => $items
    ]
    );
 }


    public function create()
    {
        return view(
            'genre.form',
            [
            'title' => 'Add new genre',
            'genre' => new Genre()

            ]
            );
           
    }
    public function put(Request $request)
{
 $validatedData = $request->validate([
 'name' => 'required',
 ]);
 $genre = new Genre();
 $genre->name = $validatedData['name'];
 $genre->save();
 return redirect('/genres');
}

public function patch(Author $genre, Request $request)
{
 $validatedData = $request->validate([
 'name' => 'required',
 ]);
 $genre->name = $validatedData['name'];
 $genre->save();
 return redirect('/genres');
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:genres|max:255',
        ]);

        Genre::create([
            'name' => $request->input('name'),
        ]);

        return redirect('/genres')->with('success', 'Genre created successfully');
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', ['genre' => $genre]);
    }

    public function update(Author $author)
{
    return view(
 'genre.form',
 [
 'title' => 'Edit genre',
 'genre' => $genre
 ]
 );
}


    public function delete(Genre $genre)
{
 $genre->delete();
 return redirect('/genres');
}
}
