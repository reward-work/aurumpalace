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




    public static function loadLanguages($domains = null)
    {

        $languages = Language::all();
        $array = [];
        foreach($languages as $language) {
            $array[] = $language->slug;
        }



        $currentProject = \App\Http\Controllers\IndexController::getCurrentDomain();
        $languages = self::formattedLanguages($languages, $currentProject, $domains);


        self::$languages = $array;
        return $languages;
    }

    public static function formattedLanguages($languages,$project, $domains) {
        if($domains === false) {
            return $languages;
        }
        $collect = collect();

        if($project == \App\Http\Controllers\IndexController::$flipperflip) {
            $except = ['fr', 'ch'];
            foreach($languages as $lang) {
                if(!in_array($lang->slug, $except)) {
                  // if(\App\Field::where('language', '=', $lang->slug)->first()) {
                    $collect->push($lang);
                  // }

                }
            }
            return $collect;
        }
        if($project == \App\Http\Controllers\IndexController::$aurumpalace) {
            $except = ['fi', 'ja', 'pt', 'ru'];
            foreach($languages as $lang) {
                if(!in_array($lang->slug, $except)) {
                    $collect->push($lang);
                }
            }
            return $collect;
        }
        return $languages;


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
