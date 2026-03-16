<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movies::all();

        return view('movies_page', compact('movies'));
    }
    public function create()
    {
        return view('movie_register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'description' => 'required|string',
            'release_date' => 'required|date',
            'director' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'rating' => 'nullable|numeric|min:0|max:10',
        ]);
        Movies::create($validatedData);
        return redirect()->route('movies.index');
    }
    public function destroy($id)
    {
        $movie = Movies::findOrFail($id);
        $movie->delete();

        return redirect()->route('movies.index');
    }
}
