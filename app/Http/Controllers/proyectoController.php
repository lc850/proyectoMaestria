<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Clientes;
use App\Maestros;

class proyectoController extends Controller
{
	/*public function listadoClientes()
	{
		$clientes = Clientes::all();
		return view('clientes',compact('clientes'));
	}*/

	public function Principal(){
		return view('info');
	}

	public function Maestros(/*Request $datos*/){
		/*$nombre=$datos->input('nombre');
        $edad=$datos->input('edad');
        $sexo=$datos->input('sexo');
        $materia=$datos->input('materia');

        $nuevo= new Maestros();
        $nuevo->nombre=$nombre;
        $nuevo->edad=$edad;
        $nuevo->sexo=$sexo;
        $nuevo->materia=$materia;
        $nuevo->save();*/

        $maestros = Maestros::all();

        return view('maestros', compact('maestros'));
	}
}