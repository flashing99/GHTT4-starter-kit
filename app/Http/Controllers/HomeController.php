<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {

    //     $data = 'Welcome to GHTT';

    //     return view('home')->with(['data' => $data]);
    // }
    public function index()
    {

        $pageConfigs = ['layoutWidth' => 'full'];
        $breadcrumbs = [
            ['link' => "home", 'name' => "Accueil"], ['name' => "GHTT"]
        ];
        // return view('/content/home', ['breadcrumbs' => $breadcrumbs ]);
        return view('filiales/index', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    }
}
