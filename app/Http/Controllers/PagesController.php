<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PagesController extends Controller
{
    public function index($domain) {
        $pages = Page::where('domain', '=', $domain)->get();

        return view('aurum.adminLTE.pages', compact('pages'));

    }
}
