<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
class LanguagesController extends Controller
{
    public function set($lang) {
        $referer = Redirect::back()->getTargetUrl();
        $parse_url = parse_url($referer, PHP_URL_PATH);


        $segments = explode('/', $parse_url);


        if (in_array($segments[1], \App\Http\Middleware\LocaleMiddleware::$languages)) {

            unset($segments[1]);
        }

        if ($lang != \App\Http\Middleware\LocaleMiddleware::$mainLanguage){
            array_splice($segments, 1, 0, $lang);
        }


        $url = Request::root().implode("/", $segments);


        if(parse_url($referer, PHP_URL_QUERY)){
            $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
        }
        return redirect($url);

    }
}
