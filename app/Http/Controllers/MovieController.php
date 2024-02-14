<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function show($id){
        $movies = Movie::all();
        $movie = $movies->find($id);
        return view('show_movies', compact('movie'));
    }
}
