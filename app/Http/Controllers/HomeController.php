<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template;
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
        $templates = Template::all();

        return view('aurum.adminLTE.dashboard', compact('templates'));
    }
}
