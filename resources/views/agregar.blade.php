@extends('layout/plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
<div class="card">
  <div class="card-header">
  Agregar nuevo
  </div>
  <div class="card-body">
    <p class="card-text">
      <form action="#">
        <!-- apellido paterno -->
        <label for="">Apellido paterno</label>
        <input type="text" name="apellido_paterno" class="form-control" required>
        <!-- apellido materno 
        <input type="text" name="nombre" class="form-control" require-->
        <label for="">Apellido materno</label>
        <input type="text" name="apellido_materno" class="form-control" required>
        <!-- nombres -->
        <label for="">Nombres</label>d>
        <!-- fecha de macimiento -->
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control" required>
        <br>
        <button class="btn btn-primary">Agregar persona</button>
      </form>
    </p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  <div class="card-footer text-body-secondary">
    11/01/2024
  </div>
</div>
@endsection
