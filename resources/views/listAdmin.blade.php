@extends('layouts.app')

@section('content')
<div class="container">
    <h1>admin</h1>
    
    <a href="{{url('usuarios/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Usuarios</a>
    
    <a href="{{url('listProducto/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Editar Productos</a>
</div>
@endsection

