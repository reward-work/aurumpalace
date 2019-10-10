<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Language;
use App\Field;
use Illuminate\Support\Facades\Cookie;
class IndexController extends Controller
{
    public function index($slug = null)
    {

        if($slug == null) {
            $template = self::$template;
        }
        else {
            $template = Page::where('slug', '=',$slug)->first();
            if(!$template) {
                abort(404);
            } else {
                $template = $template->location;
            }
        }
        $array = Field::select(['name', 'value'])
            ->where('location', '=', ($template != null ? $template : '__landing1'))
            ->where('language', '=', (\App\Http\Middleware\LocaleMiddleware::getLocale() ? \App\Http\Middleware\LocaleMiddleware::getLocale() : \App\Http\Middleware\LocaleMiddleware::$mainLanguage))
//            ->toSql();
            ->get()->toArray();
        $fields = [];


        foreach($array as $key => $arr) {
            $fields[$array[$key]['name']] = $array[$key]['value'];
        }

        $template = ($template ? $template : '__landing1');

        return view('aurum.'.$template.'.index', compact('fields'));
    }
}
