<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Support\Facades\Session;

class Admin
{


    public function handle($request, Closure $next)
    {

        if(!Auth::user()->admin) {

            Session::flash('info', 'You dont have permission to do this');

            return redirect()->back();

        }

        return $next($request);
    }
}
