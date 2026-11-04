<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class userController extends Controller
{
    public function index()
{
    $movies = Movie::all();

    return view('user.index', compact('movies'));
}
}
