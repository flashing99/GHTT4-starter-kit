<?php

namespace App\http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;

class AuthenticationHTTController extends Controller
{
    public function register()
    {
        //$pageConfigs = ['blankPage' => true];

        //$positions = "moh99";

        // dump($positions);

        //return view('/auth/auth-register',  ['positions' => $positions]);
    }

    /*   public function login_form()
    {
        $pageConfigs = ['blankPage' => true];

         
        return view('/auth/login', ['pageConfigs' => $pageConfigs]);
    }
    public function  register_form()
    {
        $pageConfigs = ['blankPage' => true];

         
        return view('/auth/register', ['pageConfigs' => $pageConfigs]);
    }
      
    public function logout()
    {
        $pageConfigs = ['blankPage' => true];

        return view('/auth/auth-login', ['pageConfigs' => $pageConfigs]);
    }*/
}
