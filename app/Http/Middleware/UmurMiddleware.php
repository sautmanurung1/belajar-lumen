<?php

namespace App\Http\Middleware;

use Closure;

class UmurMiddleware
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
       if($request-> umur <=20){
           return "Maaf Umur anda tidak Mencukupi.";
       }
        return $next($request);
    }
}
