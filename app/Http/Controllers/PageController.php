<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Gallery;
use App\ImageCategory;
use App\Offer;
use App\OfferList;
use App\OfferPage;
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

    public function about()
    {
        $about = About::where('locale_id', Session::get('locale_number',1))->first();
        return view('page.about', ['about'=>$about]);
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('page.contact', ['contact'=>$contact]);
    }

    public function offer()
    {
        $offerPage = OfferPage::first();
        $offerCategories = Offer::where('locale_id', Session::get('locale_number',1))->get();
        $offerList = OfferList::where('locale_id', Session::get('locale_number',1))->get();
        return view('page.offer', ['offerPage' => $offerPage, 'offerCategories' => $offerCategories, 'offerList' => $offerList]);
    }
}
