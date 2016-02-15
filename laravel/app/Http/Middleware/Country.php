<?php

namespace App\Http\Middleware;

use Closure;

class Country
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $banned_countries = array("US", "CA");
        $country = file_get_contents("http://ipinfo.io/" . $_SERVER['REMOTE_ADDR'] . "/country");
        echo('<!-- ' . $country . ' -->');
        if(in_array($country, $banned_countries)) {
            die();
        }

        return $next($request);
    }
}
