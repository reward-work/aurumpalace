<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Field;
use Illuminate\Support\Facades\Cookie;
use App\Language;
use GeoIp2\Database\Reader;
class IndexController extends Controller
{

    public static $flipperflip = 'flipperflip';
    public static $aurumpalace = 'aurumpalace';

    public function index($slug = null)
    {
        if(!Cookie::get('language_redirect') && self::checkBot() == false) {
          $cookie = Cookie::make('language_redirect', self::getCountry(), 36000000);

          return redirect()->route('setlocale', ['lang' => self::getCountry()])->withCookie($cookie);
        }

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
            ->get()
            ->toArray();
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

        if(empty($fields)) {
          return back();
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












    public static function getCountry() {

      $languages = \App\Language::all();
      $array = [];
      foreach($languages as $language) {
          $array[] = $language->slug;
      }

      $currentProject = \App\Http\Controllers\IndexController::getCurrentDomain();
      $languages = \App\Http\Middleware\LocaleMiddleware::formattedLanguages($languages, $currentProject, \App\Http\Controllers\IndexController::getCurrentDomain());


      $langs = [];

      foreach($languages as $l) {
        $langs[] = $l->slug;
      }

      $country = json_decode(file_get_contents('https://ipinfo.io/'.$_SERVER['REMOTE_ADDR'].'?token=9f66b2420463e4'), true);

      if(!empty($country['country'])) {
        if($country['country'] == 'hk' || $country['country'] == 'ph' || $country['country'] == 'chi' || $country['country'] == 'cho' || $country['country'] == 'zh') {
          $country = 'ch';
        }
        else {
          $country = mb_strtolower($country['country']);
        }

      }
      else {
        $country = 'en';
      }
      $lang = 'en';

      if(in_array($country, $langs)) {
        $lang = $country;
      }
      else {
        $lang = 'en';
      }

      return $lang;
    }




    public static function checkBot() {
      $bots = array(
               'Googlebot'
              , 'Baiduspider'
              , 'ia_archiver'
              , 'R6_FeedFetcher'
              , 'NetcraftSurveyAgent'
              , 'Sogou web spider'
              , 'bingbot'
              , 'Yahoo! Slurp'
              , 'facebookexternalhit'
              , 'PrintfulBot'
              , 'msnbot'
              , 'Twitterbot'
              , 'UnwindFetchor'
              , 'urlresolver'
              , 'Butterfly'
              , 'TweetmemeBot'
              , 'PaperLiBot'
              , 'MJ12bot'
              , 'AhrefsBot'
              , 'Exabot'
              , 'Ezooms'
              , 'YandexBot'
              , 'SearchmetricsBot'
              , 'picsearch'
              , 'TweetedTimes Bot'
              , 'QuerySeekerSpider'
              , 'ShowyouBot'
              , 'woriobot'
              , 'merlinkbot'
              , 'BazQuxBot'
              , 'Kraken'
              , 'SISTRIX Crawler'
              , 'R6_CommentReader'
              , 'magpie-crawler'
              , 'GrapeshotCrawler'
              , 'PercolateCrawler'
              , 'MaxPointCrawler'
              , 'R6_FeedFetcher'
              , 'NetSeer crawler'
              , 'grokkit-crawler'
              , 'SMXCrawler'
              , 'PulseCrawler'
              , 'Y!J-BRW'
              , '80legs.com/webcrawler'
              , 'Mediapartners-Google'
              , 'Spinn3r'
              , 'InAGist'
              , 'Python-urllib'
              , 'NING'
              , 'TencentTraveler'
              , 'Feedfetcher-Google'
              , 'mon.itor.us'
              , 'spbot'
              , 'Feedly'
              , 'bitlybot'
              , 'ADmantX Platform'
              , 'Niki-Bot'
              , 'Pinterest'
              , 'python-requests'
              , 'DotBot'
              , 'HTTP_Request2'
              , 'linkdexbot'
              , 'A6-Indexer'
              , 'Baiduspider'
              , 'TwitterFeed'
              , 'Microsoft Office'
              , 'Pingdom'
              , 'BTWebClient'
              , 'KatBot'
              , 'SiteCheck'
              , 'proximic'
              , 'Sleuth'
              , 'Abonti'
              , '(BOT for JCE)'
              , 'Baidu'
              , 'Tiny Tiny RSS'
              , 'newsblur'
              , 'updown_tester'
              , 'linkdex'
              , 'baidu'
              , 'searchmetrics'
              , 'genieo'
              , 'majestic12'
              , 'spinn3r'
              , 'profound'
              , 'domainappender'
              , 'VegeBot'
              , 'terrykyleseoagency.com'
              , 'CommonCrawler Node'
              , 'AdlesseBot'
              , 'metauri.com'
              , 'libwww-perl'
              , 'rogerbot-crawler'
              , 'MegaIndex.ru'
          		, 'ltx71'
          		, 'Qwantify'
          		, 'Traackr.com'
          		, 'Re-Animator Bot'
              , 'Pcore-HTTP'
              , 'BoardReader'
              , 'omgili'
              , 'okhttp'
              , 'CCBot'
              , 'Java/1.8'
              , 'semrush.com'
              , 'feedbot'
              , 'CommonCrawler'
              , 'AdlesseBot'
              , 'MetaURI'
              , 'ibwww-perl'
              , 'rogerbot'
              , 'MegaIndex'
              , 'BLEXBot'
              , 'FlipboardProxy'
              , 'techinfo@ubermetrics-technologies.com'
              , 'trendictionbot'
              , 'Mediatoolkitbot'
              , 'trendiction'
              , 'ubermetrics'
              , 'ScooperBot'
              , 'TrendsmapResolver'
              , 'Nuzzel'
              , 'Go-http-client'
              , 'Applebot'
              , 'LivelapBot'
              , 'GroupHigh'
              , 'SemrushBot'
              , 'ltx71'
              , 'commoncrawl'
              , 'istellabot'
              , 'DomainCrawler'
              , 'cs.daum.net'
              , 'StormCrawler'
              , 'GarlikCrawler'
              , 'The Knowledge AI'
              , 'getstream.io/winds'
              , 'YisouSpider'
              , 'archive.org_bot'
              , 'semantic-visions.com'
              , 'FemtosearchBot'
              , '360Spider'
              , 'linkfluence.com'
              , 'glutenfreepleasure.com'
              , 'Gluten Free Crawler'
              , 'YaK/1.0'
              , 'Cliqzbot'
              , 'app.hypefactors.com'
              , 'axios'
              , 'semantic-visions.com'
              , 'webdatastats.com'
              , 'schmorp.de'
              , 'SEOkicks'
              , 'DuckDuckBot'
              , 'Barkrowler'
              , 'ZoominfoBot'
              , 'Linguee Bot'
              , 'Mail.RU_Bot'
              , 'OnalyticaBot'
              , 'Linguee Bot'
              , 'admantx-adform'
              , 'Buck/2.2'
              , 'Barkrowler'
              , 'Zombiebot'
              , 'Nutch'
              , 'SemanticScholarBot'
              , 'Jetslide'
              , 'scalaj-http'
              , 'XoviBot'
              , 'sysomos.com'
              , 'PocketParser'
              , 'newspaper'
              , 'serpstatbot'
              , 'MetaJobBot'
              , 'SeznamBot/3.2'
              , 'VelenPublicWebCrawler/1.0'
              , 'WordPress.com mShots'
              , 'adscanner'
              , 'BacklinkCrawler'
              , 'netEstate NE Crawler'
              , 'Astute SRM'
              , 'GigablastOpenSource/1.0'
              , 'DomainStatsBot'
              , 'Winds: Open Source RSS & Podcast'
              , 'dlvr.it'
              , 'BehloolBot'
              , '7Siters'
              , 'AwarioSmartBot'
              , 'Apache-HttpClient/5'
              );
       // si lo encuentra devuelve true, si no, false
          foreach($bots as $b) {
            if( stripos( $_SERVER['HTTP_USER_AGENT'], $b ) !== false ) return true;
          }

          return false;


    }



}
