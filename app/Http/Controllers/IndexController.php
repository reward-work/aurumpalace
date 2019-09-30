<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
class IndexController extends Controller
{
    public function index()
    {
        $template = self::$template;

        return view('aurum.'.$template.'.index');
    }
}
