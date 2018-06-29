<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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

       if(\Auth::user() &&  \Auth::user()->guard == 17 && $request->is('admin/*')){
            return $next($request);
        }

        return abort('404');
    
    }
}
