@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de usuarios</h1>
    <a href="{{url('home/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Home</a>
    
    <div class="tabla-usuarios">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Password</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                <th scope="row">{{$usuario->id}}</th>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->password}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{url('verUsuario/'.$usuario->id)}}"><button type="button" class="btn btn-success">Ver</button></a>
                    <a href="{{url('editUsuario/'.$usuario->id)}}"><button type="button" class="btn btn-warning">Editar</button></a>
                    <a href=""><button type="button" class="btn btn-danger">Eliminar</button></a> 
                </div> 
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
