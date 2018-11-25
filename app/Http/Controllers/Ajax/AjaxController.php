<?php

namespace App\Http\Controllers\Ajax;

use App\ImageCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function loadMoreGallery(Request $request)
    {
        $current_category = ImageCategory::find($request->get('id'));

        $images = $current_category->images()
            ->offset($request->get('page'))
            ->limit(2)
            ->get();

        $view = view('partials.images', ['images' => $images, 'current_category' => $current_category])->render();
        return response()->json(['view' => $view]);
    }
}
