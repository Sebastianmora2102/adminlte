@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Facultad</h1>
@stop

@section('content')
    <form action="{{route('editarFac', $facultad->codFacultad)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoFacultad" name="codigoFacultad" value="{{ $facultad->codFacultad }}" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreFacultad" name="nombreFacultad" value="{{ $facultad->nomFacultad }}" placeholder="Ingrese el nombre">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

