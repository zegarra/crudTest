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
                        <td>{{ $personas-> apellido_paterno}}</td>
                        <td>{{ $personas-> apellido_materno}}</td>
                        <td>{{ $personas-> nombre}}</td>
                        <td>{{ $personas-> fecha_nacimiento}}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{route('personas.destroy', $personas->id)}}" method="POST" >
              @csrf
              @method('DELETE')             
                <button class="btn btn-danger">
                  <span class="fas fa-user-times"></span>Eliminar
                </button>
                <a href="{{route("personas.index")}}" class="btn btn-secondary">Atras</a>
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
