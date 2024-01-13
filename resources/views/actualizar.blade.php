@extends('layout/plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
<div class="card">
  <div class="card-header">Editar persona</div>
  <div class="card-body">
    <h5></h5>
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
        <label for="">Nombres</label>
        <input type="text" name="nombres" class="form-control" required>
        <!-- fecha de macimiento -->
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control" required>
        <br>
        <button class="btn btn-primary">Actualizar</button>
        <button class="btn btn-secondary" onclick="goBack()">Atras</button>
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
