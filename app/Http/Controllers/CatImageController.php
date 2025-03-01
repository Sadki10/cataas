<?php

namespace App\Http\Controllers;

use App\Models\CatImage;
use Illuminate\Http\Request;

class CatImageController extends Controller
{
    public function index()
    {
        return CatImage::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            '_id' => ['required'],
            'tags' => ['required'],
            'mimetype' => ['required'],
        ]);

        return CatImage::create($data);
    }

    public function show(CatImage $catImage)
    {
        return $catImage;
    }

    public function update(Request $request, CatImage $catImage)
    {
        $data = $request->validate([
            '_id' => ['required'],
            'tags' => ['required'],
            'mimetype' => ['required'],
        ]);

        $catImage->update($data);

        return $catImage;
    }

    public function destroy(CatImage $catImage)
    {
        $catImage->delete();

        return response()->json();
    }
}
