<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Filiale;

class HomeAdminControler extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
    }


    public function index()
    {

        $filiales = Filiale::where('status', '1')->get();
        //dd($filiales);

        return view('admin/index', ['filiales' => $filiales]);



        // return view('positions.index');
    }
}
