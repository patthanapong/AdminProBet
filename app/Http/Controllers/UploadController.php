<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload.index');
    }

    public function store()
    {
        // $path = request()->photo->store('images');
        $path = request()->photo->storeAs('images', request()->photo->getClientOriginalName() );

        dd($path);
        return 'store';
    }
}
