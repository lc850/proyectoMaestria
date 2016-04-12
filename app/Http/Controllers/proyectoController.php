<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Clientes;

class proyectoController extends Controller
{
	public function Clientes()
	{
		$clientes = Clientes::all();
		return view('clientes',compact('clientes'));
	}
}