@extends('layout/plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
<div class="card">
  <h5 class="card-header">Editar persona</h5>
  <div class="card-body">
    <!-- @php
      print_r($personas);
    @endphp -->
    <p class="card-text">
      <form action="{{route('personas.update', $personas->id)}}" method="POST">
        @csrf
        @method("PUT")
        <!-- apellido paterno -->
        <label for="">Apellido paterno</label>
        <input type="text" name="apellido_paterno" class="form-control" required value="{{$personas->apellido_paterno}}"> 
        <!-- apellido materno 
        <input type="text" name="nombre" class="form-control" require-->
        <label for="">Apellido materno</label>
        <input type="text" name="apellido_materno" class="form-control" required value="{{$personas->apellido_materno}}">
        <!-- nombres -->
        <label for="">Nombres</label>
        <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
        <!-- fecha de macimiento -->
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$personas->fecha_nacimiento}}">
        <br>
        <button class="btn btn-primary">Actualizar</button>
        <!-- <button class="btn btn-secondary" onclick="goBack()">Atras</button> -->
        <a href="{{route("personas.index")}}" class="btn btn-secondary">Atras</a>
      </form>
    </p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-body-secondary">
    12/01/2024
  </div>
</div>

<script>
  function goBack() {
    window.history.back();
  }
</script>
@endsection
