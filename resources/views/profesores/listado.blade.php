@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>
@stop

@section('content')
    <p>Listado de Profesores</p>
    <a class="btn btn-success" href="/profesores/registrar">Adicionar</a><br>
    <table class="table">
        <thead>
            <tr><br>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($profesores as $f)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $f->codProfesor}}</td>
                <td> {{ $f->nomProfesor}}</td>
                <td> {{ $f->catProfesor}}</td>
                <td>
                    <a class="btn btn-primary">Editar</a>
                    <a class="btn btn-danger" href="{{route('eliminarProfes',$f->codProfesor)}}">Eliminar</a>
                </td>
            </tr>
            @php
                $i = $i +1
            @endphp
            @endforeach
        </tbody>
    </table>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop