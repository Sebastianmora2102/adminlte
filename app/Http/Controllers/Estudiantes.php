<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiantes.listado', 
        ['estudiantes' =>$estudiantes]);
    }

    public function form_registro(){
        return view('estudiantes.registrar');
    }

    public function registrar(Request $r){
        $estudiante = new Estudiante();
        $estudiante->codEstudiante = $r->input('codigoEstudiante');
        $estudiante->nomEstudiante = $r->input('nombreEstudiante');
        $estudiante->edaEstudiante = $r->input('edadEstudiante');
        $estudiante->fechEstudiante = $r->input('fechaEstudiante');
        $estudiante->sexEstudiante = $r->input('sexoEstudiante');
        $estudiante->ciudad = $r->input('ciudadEstudiante');
        $estudiante->barrio = $r->input('barrioEstudiante');
        $estudiante->programa = $r->input('programaEstudiante');
        $estudiante->save();
        return redirect()->route('listadoEst');
    }

    public function eliminar($id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEst');
    }
}