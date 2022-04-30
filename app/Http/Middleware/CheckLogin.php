<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if((session()->has('DangNhap')) && ($request->path() === '/GioiThieu')){
        //     return redirect('/auth/login')->with('checkOn', 'Its on');
        // }

        // if((!session()->has('DangNhap')) && ($request->path() === '/GioiThieu')){
        //     return redirect('/auth/login')->with('checkOff', 'Its off');
        // }

        if (session()->has('DangNhap'))
            return redirect('/')->with('checkOn','hello');

        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
        
    }
}
