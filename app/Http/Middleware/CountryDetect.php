<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Request;
use App\Language;
use GeoIp2\Database\Reader;

class CountryDetect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    private $country;

    public function handle($request, Closure $next)
    {
        return $next($request);

    }




}
