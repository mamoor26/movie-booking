<?php

namespace App\Http\Controllers;
use App\Models\Showtime;
use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Http\Request;

class showtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Showtime::with(['movie','theater'])->get();
        return view('admin.screentime.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $movie=Movie::all();
        $theater=Theater::all();
        return view('admin.screentime.addshoetime',compact('movie','theater'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
             Showtime::create($data);
         return redirect()->Route('show.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function getMovieShowtimes($id)
{
    $showtimes = Showtime::with(['movie', 'theater'])
        ->where('movie_id', $id)
        ->get();

    return $showtimes;
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Showtime::findOrFail($id);
        Showtime::destroy($data->id);
        return Redirect()->route('show.index');
    }
}
