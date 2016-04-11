<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Carrera;
use DB;

use App\Http\Requests;

class ejemploController extends Controller
{
    public function index(){
        return view ('welcome');
        //$carreras=Carrera::all();
    	//return view('ejemplo', compact('carreras'));
    }

    public function mostrarContacto(){
    	return view('contacto');
    }

    public function consultar(){
    	return view('consulta');
    }

    public function home(){
    	return view('home');
    }

    public function registro(){

        $carreras=Carrera::all();
    	return view('registro', compact('carreras'));
    }

    public function registra(Request $datos){
        $nombre=$datos->input('nombre');
        $edad=$datos->input('edad');
        $sexo=$datos->input('sexo');
        $carrera=$datos->input('carrera');

        $nuevo= new Alumno();
        $nuevo->nombre=$nombre;
        $nuevo->edad=$edad;
        $nuevo->id_carrera=$carrera;
        $nuevo->sexo=$sexo;
        $nuevo->save();

        $alumnos=Alumno::all();

        return view('muestraRegistro', compact('alumnos'));
    }

    public function listaAlumnos($id){
        $alumnos=Alumno::where('id_carrera', $id);
        return view('listaAlumnos', compact('alumnos'));
    }

    public function eliminar($id){
        
        $alumno=Alumno::find($id);
        $alumno->delete();

        return redirect('lista');
    }

    public function modificar($id){
        $alumno=Alumno::find($id);
        $carreras=Carrera::all();
        return view('modificar', compact('alumno', 'carreras'));
    }

    public function actualizar($id, Request $datos){
        $alumno=Alumno::find($id);
        $alumno->nombre=$datos->input('nombre');
        $alumno->edad=$datos->input('edad');
        $alumno->carrera=$datos->input('carrera');
        $alumno->sexo=$datos->input('sexo');
        $alumno->save();

        return redirect('lista');
    }

    public function generaPDF(){
        $alumnos=Alumno::all();

        $view = \View::make('alumnosPDF', compact('alumnos'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('AlumnosUAS');
    }

}
