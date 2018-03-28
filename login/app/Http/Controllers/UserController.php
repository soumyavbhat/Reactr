<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Session;
use Request;
use App\User;
use Input;
use Hash;

class UserController extends Controller
{
    //

    public function session(Request $request)
    {
      Session::get('success', 'Succesfully logged in!');
    }


    public function register(){
      return redirect('register');
    }

    public function registerfill(){
      $user = new User;
        $user->first_name =Input::get('first_name');
        $user->last_name =Input::get('last_name');
        $user->email =Input::get('email');
        $user->username =Input::get('username');
        $user->password =Hash::make(Input::get('password'));
        $user->save();
        $theEmail = Input::get('email');

        return redirect('thanks')->with('theEmail, $theEmail');
    }
}
