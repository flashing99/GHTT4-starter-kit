<?php

namespace App\Http\Controllers\filiales\positions;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;


class PositionController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $positions = Position::all();

        dd($positions);

        // return view('positions.index');
    }
}
