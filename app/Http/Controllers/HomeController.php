<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
use Illuminate\Support\Facades\Cookie;
use App\Field;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $i = 1;
//        $languages = \App\Http\Middleware\LocaleMiddleware::loadLanguages();
//        foreach(['template1', 'template2','template3', 'template4'] as $temp) {
//            foreach($languages as $lang) {
//                $create = Field::create([
//                    'name' => 'terms_html',
//                    'location' => '__landing'.$i,
//                    'placeholder' => 'Bonus & Terms & conditions',
//                    'type' => 'textarea',
//                    'order' => 6,
//                    'language' => $lang->slug,
//                    'template' => $temp,
//                ]);
//                dump($create);
//            }
//            $i++;
//        }


        $templates = Template::all();

        return view('aurum.adminLTE.dashboard', compact('templates'));
    }

    public function set_template($template)
    {


        Cookie::queue('template',$template,36000000);

        return back();
    }
}
