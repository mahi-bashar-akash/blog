<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
/*    public function handle($request, Closure $next)
    {
        $path = Request::route()->getName();
        if (Auth::check()) {
            if($path == 'user.panel.login' || $path == 'user.panel.forget.password') {
                return redirect()->route('user.panel.profile');
            } else {
                return $next($request);
            }
        } else {
            if($path == 'user.panel.profile' || $path == 'user.panel.articles') {
                return redirect()->route('user.panel.login');
            } else {
                return $next($request);
            }
        }
    }*/



    public function handle($request, Closure $next)
    {
        $path = Request::route()->getName();
        if (Auth::check()) {
            if($path == 'user.panel.login' || $path == 'user.panel.forget.password') {
                return redirect()->route('user.panel.profile');
            } else {
                return $next($request);
            }
        } else {
            if($path != 'user.panel.login' && $path != 'user.panel.forget.password') {
                return redirect()->route('user.panel.login');
            } else {
                return $next($request);
            }
        }
    }
}
