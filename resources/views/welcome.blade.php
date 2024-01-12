@extends('layout/plantilla')
@section('crudPagina','crud con Larevel')
@section('contenido')
<div class="card text-center">
  <div class="card-header">
    CRUD CON LARAVEL 8
  </div>
  <div class="card-body">
    <h5 class="card-title">Listado de personas en mi sistema</h5>
    <p>
        <a href="{{route('personas.create') }}" class="btn btn-primary">Add new person</a>
        <a href="{{route('personas.edit') }}" class="btn btn-primary">Edit person</a>
    </p>
    <hr>
    <!-- @php
    print_r($datos)
    @endphp -->
    <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                @foreach ($datos as $item)
                   
                    <tr>
                        <td>{{$item -> apellido_paterno}}</td>
                        <td>{{$item -> apellido_materno}}</td>
                        <td>{{$item -> nombre}}</td>
                        <td>{{$item -> fecha_nacimiento}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </p>
   
  </div>
  <div class="card-footer text-body-secondary">
    11/01/2024
  </div>
</div>
@endsection