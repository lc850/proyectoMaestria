<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Clientes;

class proyectoController extends Controller
{

	public function paginaInicio()
	{
		return view('inicio');
	}
	public function listadoClientes()
	{
		$clientes = Clientes::all();
		return view('listaAlumnos',compact('clientes'));
	}
	public function MostrarRegistro()
	{
		return view('registrarAlumno');
	}

	public function RegistrarAlumno(Request $Datos)
	{
		$Nombre = $Datos->input('nombre');
    	$Apellido = $Datos->input('apellido');
    	$Edad = $Datos->input('edad');
    	$Sexo = $Datos->input('sexo');

        $objAlumno = new Clientes();

        $objAlumno->Nombre = $Nombre;
        $objAlumno->Apellido = $Apellido;
        $objAlumno->Edad = $Edad;
        $objAlumno->Sexo = $Sexo;
        $objAlumno->save();

        $clientes = Clientes::all();
		return view('listaAlumnos',compact('clientes'));
	}
}