<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::orderBy('name', 'asc')->get();
        return view('genres.index', ['genres' => $genres]);
    }

    public function create()
    {
        return view('genres.create');
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

    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required|unique:genres|max:255',
        ]);

        $genre->update([
            'name' => $request->input('name'),
        ]);

        return redirect('/genres')->with('success', 'Genre updated successfully');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect('/genres')->with('success', 'Genre deleted successfully');
    }
}
