<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Movies;
use App\Models\Tickets;
use App\Models\User;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        return view('user_tickets', [
            'tickets' => auth()->user()->tickets()->with('movie')->get(),
        ]);
    }
    public function create($movie_id)
    {
        
       $movie=Movies::findOrFail($movie_id);
        return view('get_tickets', compact('movie'));

    }
    public function store(Request $request)
    {
        $request->merge(['user_id' => auth()->id()]);
        $validatedData = $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'user_id' => 'required|exists:users,id',
        ]);
        Tickets::create($validatedData);
        return redirect()->route('movies.index')->with('success', 'Ingresso salvo com sucesso.');
    }
}
