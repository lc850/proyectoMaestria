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
		return view('principal');
	}

	public function Maestros($id){
		$maestros=Maestros::where('id_maestro', $id);
        return view('maestros', compact('maestros'));
	}
}