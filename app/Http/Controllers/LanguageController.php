<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 07.09.18
 * Time: 09:01
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    public function setLocale($locale='en'){
        if (!in_array($locale, ['en', 'pl'])){
            $locale = 'en';
        }

        if($locale == 'pl'){
            Session::put('locale_number',1);
        }elseif ($locale == 'en'){
            Session::put('locale_number',2);
        }

        Session::put('locale', $locale);
        return redirect(url(URL::previous()));
    }
}
