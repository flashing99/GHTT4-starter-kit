<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiale;
use App\Models\AgItem;
use App\Models\AgGroup;
use App\Models\User;

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


            //  dd(auth()->user()->is_admin);

            // $filiales = Filiale::where('status', '1')->withe('filial_data_lines')->where()->get();




            return view('admin.index', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs])->with('filiales', $filiales);

            //

        } else {

            //dd(auth()->user()->is_admin);

            //--------------------------------------------------------------
            // groupBy('ag_groups_id')->get()
            //$aggr_items = AgItem::where('status', '1')->with('aggregates_group')->get();

            // $ag_groups = AgGroup::where('status', '1')->with('ag_item')->get();

            // print_r(AgGroup::where('status', '1')->with('ag_item')->get());

            // dd($ag_groups);
            //--------------------------------------------------------------



            $agr_items = AgItem::where('status', '1')->with('ag_group')->get();
            // dd($aggr_items);

            /*   $aggr_groups = AgGroup::where('status', '1')->with('ag_items')->get();
            dd($aggr_groups); */

            /* $user = User::with('position')->where('position_id', 2)->get();
            dd($user); */
            // $user = User::with(['company', 'employee.department', 'employee.gradelevel'])->get();
            // dd($user);

            return view('manager.index', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs])
                ->with('agr_items', $agr_items);
            // return view('/content/home', ['breadcrumbs' => $breadcrumbs ]);

        }
    }
}
