<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //qui creo un metodo
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
