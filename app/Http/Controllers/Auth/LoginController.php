<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    public function redirectTo(){

    // User role
    $role = Auth::user()->role; 

    // Check user role
        switch ($role) {
            case 100:
                    return '/admin';
                break;
            case 1:
                    return '/mahasiswa';
                break; 
            case 10:
                    return '/akademik';
                break; 
            case 11:
                    return '/jurusan';
                break; 
            default:
                    return '/login'; 
                break;
        }
    }

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
