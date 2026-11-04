<?php

namespace App\Http\Controllers;
use App\Models\Theater;
use Illuminate\Http\Request;

class theaterController extends Controller
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
         $data=Theater::all();
        return view('admin.fatchtheaters',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data=$request->all();
        Theater::create($data);
         return redirect()->Route('theater.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $info=Theater::findOrFail($id);
        return view('admin.edittheater',compact('info'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->all();
        $result=Theater::findOrFail($id);
        $result->update($data);
        return Redirect()->route('theater.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Theater::findOrFail($id);
        Theater::destroy($data->id);
        return redirect()->route('theater.create');
    }
}
