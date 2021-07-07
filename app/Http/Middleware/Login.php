<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        // $user = Auth::user()->hak_akses;
        // dd($user);
        if (auth()->check() && $request->user()->hak_akses == 2) {
            return $next($request);
            // return redirect('/dashboard');
        } else if (auth()->check() && $request->user()->hak_akses == 3) {
            return redirect('/home');
        } else if (auth()->check() && $request->user()->hak_akses == 1) {
            return redirect('/super');
        }
    }
}
