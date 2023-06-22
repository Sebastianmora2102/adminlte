@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Estudiantes</h1><br>
    <form action= "{{url('estudiantes/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoEstudiante" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoEstudiante" name="codigoEstudiante" placeholder="Ingrese el código (ES01)">
        </div>

        <div class="mb-3">
            <label for="nombreEstudiante" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="edadEstudiante" class="form-label">Edad</label>
            <input type="text" class="form-control" id="edadEstudiante" name="edadEstudiante" placeholder="Ingrese la edad">
        </div>

        <div class="mb-3">
        <label for="fechaEstudiante">Fecha de Nacimiento</label><br>
        <input type="date" name="fechaEstudiante" id="fechaEstudiante">
        </div>

        <div class="mb-3">
        <label for="sexoEstudiante">Sexo</label><br>
        <select name="sexoEstudiante" id="sexoEstudiante">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="ciudadEstudiante">Ciudad</label><br>
        <select name="ciudadEstudiante" id="ciudadEstudiante">
            <option value="COD01">Pasto</option>
            <option value="COD02">Cali</option>
            <option value="COD03">Bogota</option>
            <option value="COD04">Leticia</option>
            <option value="COD05">Riohacha</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="barrioEstudiante">Barrio</label><br>
        <select name="barrioEstudiante" id="barrioEstudiante">
            <option value="001">Fatima</option>
            <option value="002">Santa Barbara</option>
            <option value="003">Santa Monica</option>
            <option value="004">Pandiaco</option>
            <option value="005">San Ignacio</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="programaEstudiante">Programa</label><br>
        <select name="programaEstudiante" id="programaEstudiante">
            <option value="01">Diseño Grafico</option>
            <option value="02">Ing de Sistemas</option>
            <option value="03">Medicina</option>
            <option value="04">Derecho</option>
            <option value="05">Veterinaria</option>
        </select>
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>


@stop

@section('content')
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop