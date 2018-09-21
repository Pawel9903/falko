<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('page.welcome', ['sliders' => $sliders]);
    }

    public function gallery()
    {
        return view('page.gallery');
    }
}
