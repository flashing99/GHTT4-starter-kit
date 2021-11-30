<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeControler extends Controller
{


    public function index()
    {



        return view('admin.index');

        //  dd($filiales);

        // return view('positions.index');
    }
}
