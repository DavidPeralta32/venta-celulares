@extends('layouts.app')

@section('content')
<div class="container" style="font-size:23px;">
<div class="card">
  <h2 class="card-header">Usuario: {{$usuarios->name}}</h2>
  <div class="card-body">
  <a href="{{url('usuarios/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Usuarios</a>

    <div class="formulario-verUsuario">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input type="text" class="form-control"  value="{{$usuarios->id}}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                <input type="text" class="form-control" value="{{$usuarios->name}}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Correo</label>
                <input type="text" class="form-control" value="{{$usuarios->email}}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" value="{{$usuarios->password}}" readonly>
            </div>
        </form>
    </div>
  </div>
</div>

    

</div>
@endsection

