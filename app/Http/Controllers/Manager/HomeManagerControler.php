<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Filiale;

class HomeManagerControler extends Controller
{


    public function __construct()
    {
        //  $this->middleware('auth');
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {

        // $filiales = Filiale::where('status', '1')->get();
        // //dd($filiales);

        // return view('admin.index', ['filiales' => $filiales]);

        /*       $pageConfigs = ['layoutWidth' => 'full'];
        $breadcrumbs = [
            ['link' => "home", 'name' => "Accueil"], ['name' => "GHTT"],

        ];
        // return view('/content/home', ['breadcrumbs' => $breadcrumbs ]);
        return view('manager.index', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]); */



        //! --  To change you template you need to modify a config file (custom.php) in <sconfig> folder

        $pageConfigs = ['showMenu' => false, 'theme' => 'dark'];
        $breadcrumbs = [
            ['link' => "home", 'name' => "Accueil"], ['name' => "GHTT"],, ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout without menu"]
        ];
        return view('manager/index', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    }


    // without menu
    /*    public function without_menu()
     {
         $pageConfigs = ['showMenu' => false];
         $breadcrumbs = [
             ['link' => "home", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout without menu"]
         ];
         return view('/content/layout-without-menu', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
     } */
}
