<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieApiController extends Controller
{

    public function __construct(Movie $movie, Request $request)
    {
        $this->movie = $movie;
        $this->request = $request;
    }

    public function store(Request $request)
    {
        $movieForm = $request->all();

        $requestImage = $request->file('image');

        $image = $requestImage->store("image", "public");

        $movieData = $this->movie->create(
            [
                'image' => $request->image,
                'title' => $request->title,
                'gender' => $request->gender,
                'director' => $request->director,
                'description' => $request->description
            ]);

        return response()->json($movieData);
    }


    public function show($id)
    {
        $movie = $this->movie->findOrFail($id);

        return response()->json($movie);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
