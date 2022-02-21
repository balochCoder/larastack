<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::published()->latest()->paginate(15);
        return view('image.index', compact('images'));
    }

    public function show(Image $image)
    {
        return view('image.show', compact('image'));
    }

    public function create()
    {
        return view('image.create');
    }

    public function store(StoreImageRequest $request)
    {
        dd($request->validated());
    }
}
