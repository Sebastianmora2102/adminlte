<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;

class Profesores extends Controller
{
    public function index(){
        $profesores = DB::table('profesores')->get();
        return view('profesores.listado', 
        ['profesores' =>$profesores]);
    }

    public function form_registro(){
        return view('profesores.registrar');
    }

    public function registrar(Request $r){
        $profesor = new Profesor();
        $profesor->codProfesor = $r->input('codigoProfesor');
        $profesor->nomProfesor = $r->input('nombreProfesor');
        $profesor->catProfesor = $r->input('categoriaProfesor');
        $profesor->save();
        return redirect()->route('listadoProfes');
    }

    public function eliminar($id){
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoProfes');
    }
}