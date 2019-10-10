<?php
namespace App\Repository\Helpers;

class MainHelpers {
    public static function getLinkOnPage($slug)
    {

        $currentLanguage = \App\Http\Middleware\LocaleMiddleware::getLocale();


        $domain = $_SERVER['HTTP_HOST'];

        $url = $domain;

        if($currentLanguage == null) $url .= '/' . $slug; else $url .= '/' . $currentLanguage . '/' . $slug;


        return $url;
    }


    public static function getTermsUrl()
    {
        $lang = (\App\Http\Middleware\LocaleMiddleware::getLocale() ? \App\Http\Middleware\LocaleMiddleware::getLocale() : \App\Http\Middleware\LocaleMiddleware::$mainLanguage);
        $url = '';
        switch($lang){
            case 'en':
                $url = 'https://aurumpalace.com/bonus-terms-and-conditions';
                break;
            case 'fr':
                $url = 'https://www.aurumpalace.com/fr/termes-et-conditions-des-bonus/';
                break;
            case 'no':
                $url = 'https://www.aurumpalace.com/no/bonus-vilkar-og-betingelser/';
                break;
            case 'ch':
                $url = 'https://www.aurumpalace.com/cn/bonus-terms-and-conditions/';
                break;
            case 'de':
                $url = 'https://www.aurumpalace.com/de/bonusbedingungen-und-bedingungen/';
                break;
            case 'es':
                $url = 'https://www.aurumpalace.com/es/terminos-y-condiciones-de-los-bonos/';
                break;
            default:
                $url = 'https://aurumpalace.com/bonus-terms-and-conditions';
                break;

        }

        return $url;
    }
}


