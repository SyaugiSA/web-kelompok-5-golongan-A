<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login
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
        $user = Auth::user()->hak_akses;
        if($user == 2){
            return $next($request);
        }else if($user == 3){
            return redirect('/home');
        }else if ($user == 1){
            return redirect('/super');
        }
    }
}