<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;

class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.listado', 
        ['programas' =>$programas]);
    }

    public function form_registro(){
        return view('programas.registrar');
    }

    public function registrar(Request $r){
        $programa = new Programa();
        $programa->codPrograma = $r->input('codigoPrograma');
        $programa->nomPrograma = $r->input('nombrePrograma');
        $programa->facultad = $r->input('facultadPrograma');
        $programa->save();
        return redirect()->route('listadoPro');
    }

    public function eliminar($id){
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('listadoPro');
    }
}