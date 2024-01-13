@extends('layout/plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
<div class="card">
  <div class="card-header">Eliminar persona</div>
  <div class="card-body">
    <p class="card-text">
        <div class="alert alert-danger" role="alert">
        Estas seguro de eliminar registro
            <table class="table table-sm table-hover">
                <thead>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="">
                <button class="btn btn-secondary" onclick="goBack()">Atras</button>
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </p>
  </div>
</div>

<script>
  function goBack() {
    window.history.back();
  }
</script>
@endsection
