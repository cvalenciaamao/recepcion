<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function index(){
        return view('habitacion.index');
    }
    public function create(){
        return view('habitacion.create');
    }
    public function show(){
        return view('habitacion.show');
    }
}
