<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Request;
use App\Language;
class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public static $mainLanguage = 'en';

    public static $languages;

    public static function loadLanguages()
    {
        $languages = Language::all();
        $array = [];
        foreach($languages as $language) {
            $array[] = $language->slug;
        }


        self::$languages = $array;

    }


    public static function getLocale()
    {
        self::loadLanguages();

        $uri = Request::path();


        $segmentsURI = explode('/',$uri);



        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {

            if ($segmentsURI[0] != self::$mainLanguage) return $segmentsURI[0];

        }
        return null;
    }



    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();

        if($locale) App::setLocale($locale);
        else App::setLocale(self::$mainLanguage);

        return $next($request);
    }
}
