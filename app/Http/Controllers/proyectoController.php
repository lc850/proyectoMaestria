<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Clientes;
use App\Materias;

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
	public function listadoMaterias()
	{
		$materias = Materias::all();
		return view ('materias', compact('materias'));

	}
}