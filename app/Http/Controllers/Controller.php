<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Template;
class Controller extends BaseController
{
    public static $template;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
       $template = Template::where('set', '=', 1)->first();
       if($template) {
           self::$template = $template->path;
       }
       if(!$template) {
           dd('Template not selected');
       }
    }

}
