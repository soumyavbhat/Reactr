<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Request;
use Input;
use App\User;
use DB;


class LoginController extends Controller
{
    // /*
    // |--------------------------------------------------------------------------
    // | Login Controller
    // |--------------------------------------------------------------------------
    // |
    // | This controller handles authenticating users for the application and
    // | redirecting them to your home screen. The controller uses a trait
    // | to conveniently provide its functionality to your applications.
    // |
    // */
    //
    // use AuthenticatesUsers;
    //
    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';
    //
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login()
    {
      return View::make('login');

    }

    public function loginfill()
    {



      $credentials = Input::only('username', 'password');
      $username = Input::get('username');
      if(      $result = DB::table('users')->where('username', $username)->value('approved')>0)
      // ^ A column(field) - approved is added. Only if the value is not 0, the user can log in
      {
if(Auth::attempt($credentials))
{
  return redirect('dashboard');
$session = new config/session;
$session->username = Input::get('username');

} return redirect()->back();
    }return redirect()->back();

}
}
