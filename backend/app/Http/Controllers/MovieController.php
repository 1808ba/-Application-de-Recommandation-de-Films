<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // protected $movie ;
    // public function __construct(){
    //     $this->movie = new Movie();
    // }




    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    //     return $this->movie->all();
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|url', // Assuming you are sending the URL of the image
        ]);

        $movie = Movie::create([
            'title' => $request->input('title'),
            'image' => $request->input('image'),
        ]);

        return response()->json($movie, 201);
        //
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
