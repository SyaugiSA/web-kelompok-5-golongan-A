<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $this->validate($request, [
            'username'=> 'required|string',
            'password'=> 'required|string|min:6'
        ]);

        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email':'username';

        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];

        if(auth()->attempt($login)){
            return redirect()->route('home');
        }

        return redirect()->route('login')->with(['error'=>'Email/Password Salah!']);
    }
}