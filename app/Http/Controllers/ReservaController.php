<?php

namespace App\Http\Controllers;

use App\Models\habitacion;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    //
    public function create(){
        return view('habitacion.create');
    }
    public function creareserva(Request $request){
        $reglas=[
            'nombres'=>'required',
            'apellidos'=> 'required',
            'correo'=> 'required',
            'telefono'=> 'required',
            'tarjeta'=> 'required',
            'tnombres'=> 'required',
            'tapellidos'=> 'required',
            'tnumero'=> 'required',
            'tcaducidad'=> 'required',
            'tcodigo'=> 'required'
        ];
        $mensajeDeError = [
            'required' => 'Ingreso de datos erróneo'
        ];
        $this->validate($request, $reglas, $mensajeDeError);
        habitacion::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'tarjeta' => $request->tarjeta,
            'tnombres' => $request->tnombres,
            'tapellidos' => $request->tapellidos,
            'tnumero' => $request->tnumero,
            'tcaducidad' => $request->tcaducidad,
            'tcodigo' => $request->tcodigo,
            
        ]);
        $this->mensaje('message', 'reservado correctamente!');
        return redirect()->back();
    }
}
