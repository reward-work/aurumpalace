<?php

namespace App\Providers;

use App\Template;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\ServiceProvider;
use View;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $getParams = [];
      foreach($_GET as $key => $value)
        {
           $getParams[$key] = $value;
        }
        if(count($getParams) > 0) {
          $getParams = '?'.http_build_query($getParams);
        }
        else {
          $getParams = http_build_query($getParams);
        }


        view()->composer('*', function ($view)
        {
            if(Auth::check()) {
                if(!Cookie::get('template')) {
                    $template = Template::first();
                    Cookie::queue('template', $template->path, 36000000);
                }
            }
        });

        $templates = Template::all();

        View::share('templates', $templates);
        View::share('getParams', $getParams);
    }
}
