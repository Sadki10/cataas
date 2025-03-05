<?php

namespace App\Http\Controllers;

use App\Models\CatImage;
use Illuminate\Http\Request;

class CatImageController extends Controller
{
    const MAX_IMAGES_SHOWN = 500;
    public function index($limit = null)
    {
        if (!is_numeric($limit) || $limit < 1) {
            $limit = 15;
        }

        $catImages = CatImage::limit(min($limit, self::MAX_IMAGES_SHOWN))->get();
        return view('cats', ['catImages' => $catImages]);
    }

    public function api()
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
