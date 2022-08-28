<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\BanMiddleware;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use PhpParser\Error;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
//    public function redirectTo()
//    {
//
//
//        if (Auth::user()->role_as == 'admin') {
//            return 'dashboard';
//        }
//        if (Auth::user()->role_as == 'provider') {
//            return 'provider';
//        }
//
//        if (Auth::user()->role_as == 'user') {
//            return 'user';
//
//        }
//        if (Auth::user()->role_as == 'provider') {
//            return 'provider';
//
//        }
//        if (Auth::user()->role_as == 'handyman') {
//            return 'handyman';
//
//        } else {
//            return 'welcome';
//        }
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
