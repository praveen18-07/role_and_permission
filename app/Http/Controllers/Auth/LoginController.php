<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    // public function login(Request $request)
    // {

    //     // Validate the login request
    //     $this->validateLogin($request);

    //     // Attempt to log the user in
    //     if ($this->attemptLogin($request)) {
    //         // Access email or other request data if needed
    //         $email = $request->input('email');
    //         // Do something with $email, if needed

    //         return redirect()->to('/home');        }

    //     return $this->sendFailedLoginResponse($request);
    // }
}
