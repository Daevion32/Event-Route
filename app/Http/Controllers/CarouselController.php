<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\carousel;
use image;

class CarouselController extends Controller
{
    //
    public function index()
    {
        $carousels = Carousel::all();

        return view('home', compact('carousels'));
    }
}
