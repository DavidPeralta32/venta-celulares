@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Usuario</h1>
    <a href="{{url('usuarios/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Usuarios</a>

    <div class="formulario-verUsuario">
        <form method="post" action="{{route('actualiza')}}">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                <input type="text" name="id" class="form-control"  value="{{$usuarios->id}}" readonly>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{$usuarios->name}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Correo</label>
                <input type="email" name="email" class="form-control" value="{{$usuarios->email}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" value="{{$usuarios->password}}" readonly>
            </div>
            @if(Session::has('update_Good'))
            <div class="alert alert-success" role="alert">
            {{Session::get('update_Good')}}
            </div>
            @endif 
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection

