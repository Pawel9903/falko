<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\ImageCategory;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function index()
    {
        if(empty(Session::get('locale_number')))
        {
            Session::put('locale_number',1);
        }

        $sliders = Slider::where('locale_id', Session::get('locale_number',1))->get();
        return view('page.welcome', ['sliders' => $sliders]);
    }

    public function gallery()
    {
        $categories = ImageCategory::where('locale_id', Session::get('locale_number',1))->get();
        $gallery = Gallery::where('locale_id', Session::get('locale_number',1))->first();
        return view('page.gallery', ['categories' => $categories, 'gallery' => $gallery]);
    }
}
