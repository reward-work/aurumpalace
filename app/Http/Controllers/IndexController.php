<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Language;
use App\Field;
use Illuminate\Support\Facades\Cookie;
class IndexController extends Controller
{

    public static $flipperflip = 'flipperflip';
    public static $aurumpalace = 'aurumpalace';

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

        $page = Page::where('location', '=', $template)->first();

        if($page) {
            if($page->domain != self::getCurrentDomain()) {
                return abort(404);
            }
        }
        return view('aurum.'.$template.'.index', compact('fields'));
    }


    public static function getCurrentDomain() {
        $host = $_SERVER['HTTP_HOST'];
        $domain = '';
        switch($host){
            case 'aurum-palace.com':
                $domain = self::$aurumpalace;
                break;
            case 'aurumpalace.net':
                $domain = self::$aurumpalace;
                break;
            case 'aurumpalace.casino':
                $domain = self::$aurumpalace;
                break;
            case 'flipperflip.casino':
                $domain = self::$flipperflip;
                break;
            case 'flipperflip.club':
                $domain = self::$flipperflip;
                break;
            case 'flipperflip.net':
                $domain = self::$flipperflip;
                break;

        }

        return $domain;

//        dd($host);
    }
}
