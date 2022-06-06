<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class HomeController extends Controller
{
    public function home(Request $request){

        $trip = Trip::all();

        return view('home', ['test' =>
            $trip]);
    }
}
