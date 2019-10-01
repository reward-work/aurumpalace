<?php

namespace App\Http\Controllers;

use App\Events\CreateLanguage;
use App\Field;
use App\Http\Requests\LanguageRequest;
use App\Language;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
class LanguagesController extends Controller
{
    public function index()
    {
        return view('aurum.adminLTE.languages');
    }

    public function create(LanguageRequest $request)
    {
        DB::beginTransaction();
        $language = Language::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug')
        ]);

        if($language) {
            $event = event(new CreateLanguage($request->input('slug')));
        }

        if($language && $event) {
            DB::commit();
            return back()->with('message_success', 'Language success added!');

        }
        else{
            DB::rollback();
            return back()->with('message_error', 'Error');

        }

    }
    public function delete($slug)
    {
        if($slug == \App\Http\Middleware\LocaleMiddleware::$mainLanguage) {
            return back()->with('message_error', 'Is main language!');
        }

        $delete = Language::where('slug', '=', $slug)->delete();
        Field::where('language', '=', $slug)->delete();

        if($delete) {
            DB::commit();
            return back()->with('message_success', 'Delete success!');
        }

        return back()->with('message_error', 'Error!');


    }
    public function set($lang)
    {
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
