<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function show(){
        return view('habitacion.show');
    }
}
