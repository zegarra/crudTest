@extends('layout/plantilla')
@section('crudPagina','crud con Larevel')
@section('contenido')
<div class="card text-center">
  <div class="card-header">CRUD CON LARAVEL 8</div>
  <div class="card-body">
  <div class="row">
      <div class="col-sm-12">
        @if($mensaje= Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$mensaje}}
          </div>
          @endif
        </div>
    </div>
    <h5 class="card-title">Listado de personas en mi sistema</h5>
    <p>
        <a href="{{route('personas.create') }}" class="btn btn-primary"><spam class="fas fa-user-plus"></spam>Add new person</a>
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
                        <td>
                          <form action="{{ route("personas.edit", $item->id)}}" method="GET">
                            <button class="btn btn-warning btn-sm">
                              <span class="fas fa-user-edit"></span>
                            </button>
                          </form>                         
                        </td>
                        <td>
                          <form action="{{ route("personas.show", $item->id)}}" method="GET">
                             <button class="btn btn-danger btn-sm">
                              <span class="fas fa-user-times"></span>
                            </button>
                          </form>                         
                        </td>
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