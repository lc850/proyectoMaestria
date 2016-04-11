<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\clientes;

class proyectoController extends Controller
{
	public function listaClientes()
	{
		$listadoclientes = cliente::All();
		return view('clientes',compact('listadoclientes'));
	}
}