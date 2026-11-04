<?php

namespace App\Http\Controllers;
use App\Models\Showtime;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;

class movieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=Movie::all();
        return view('admin.fatchmovies',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data=$request->all();
        if($request->hasFile('Trailer')){
            $trailer=$request->file('Trailer')->store('trailer_folder','public');
            $data['Trailer']=basename($trailer);

        }
        $poster=$request->file('Poster')->store('poster_folder','public');
            $data['Poster']=basename($poster);

        Movie::create($data);
         return redirect()->Route('movie.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $movie = Movie::findOrFail($id);

    return view('user.details', compact('movie'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $info=Movie::findOrFail($id);
        return view('admin.editmovies',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $data=$request->all();
        if($request->hasFile('Trailer')){
            $trailer=$request->file('Trailer')->store('trailer_folder','public');
            $data['Trailer']=basename($trailer);

        }
        $poster=$request->file('Poster')->store('poster_folder','public');
            $data['Poster']=basename($poster);
            $result= Movie::findOrFail($id);

        $result->update($data);
         return redirect()->Route('movie.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Movie::findOrFail($id);
        Movie::destroy($data->id);
          return redirect()->Route('movie.create');

    }

    public function ticket($id)
{
    $movie = Movie::findOrFail($id);

    $showtimes = Showtime::with('theater')
        ->where('movie_id', $id)
        ->get();

    return view('user.ticket', compact('movie', 'showtimes'));
}
}
