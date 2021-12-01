<?php

namespace App\Http\Controllers\Admin\filiales;

use App\Models\Filiale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilialeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }



    public function index()
    {

        $filiales = Filiale::all();

        return view('filiales.index');

        //  dd($filiales);

        // return view('positions.index');
    }
}
