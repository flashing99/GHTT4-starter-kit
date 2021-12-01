<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiale;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $teck = auth()->user()->is_admin;
        //$this->middleware('auth');




        // redirect()->to('login');
    }

    public function index()
    {

        $pageConfigs = ['layoutWidth' => 'full'];
        $breadcrumbs = [
            ['link' => "home", 'name' => "Accueil"], ['name' => "GHTT"]
        ];


        if (auth()->user()->is_admin == 1) {


            // dd(auth()->user()->is_admin);

            $filiales = Filiale::where('status', '1')->get();

            return view('admin.index', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs])->with('filiales', $filiales);

            //

        } else {

            //dd(auth()->user()->is_admin);

            return view('manager.index', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
            // return view('/content/home', ['breadcrumbs' => $breadcrumbs ]);

        }
    }
}
