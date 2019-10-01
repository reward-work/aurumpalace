<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\Field;
use Illuminate\Support\Facades\Cookie;
class IndexController extends Controller
{
    public function index()
    {
        $template = self::$template;
        $array = Field::select(['name', 'value'])->where('location', '=', 'index')
            ->where('template', '=', $template)
            ->where('language', '=', (\App\Http\Middleware\LocaleMiddleware::getLocale() ? \App\Http\Middleware\LocaleMiddleware::getLocale() : \App\Http\Middleware\LocaleMiddleware::$mainLanguage))
            ->get()->toArray();
        $fields = [];


        foreach($array as $key => $arr) {
            $fields[$array[$key]['name']] = $array[$key]['value'];
        }


        return view('aurum.'.$template.'.index', compact('fields'));
    }
}
