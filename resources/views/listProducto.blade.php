@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de productos</h1>
    
    <div class="lista-productos" style="margin-top:15px;">
        <a href="{{url('crearProducto/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Crear Producto</a>
    
    <div class="lista-producto">
    @if(Session::has('delete_Good'))
            <div class="alert alert-success" role="alert">
            {{Session::get('delete_Good')}}
            </div>
        @endif 
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Foto</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                <th scope="row">{{$producto->id}}</th>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td>
                    <img src="{{$producto->foto}}" width="100" height="50">
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{url('verProducto/'.$producto->id)}}"><button type="button" class="btn btn-success">Ver</button></a>
                        <a href="{{url('editarProducto/'.$producto->id)}}"><button type="button" class="btn btn-warning">Editar</button></a>
                        <a href="{{url('eliminarProducto/'.$producto->id)}}"><button type="button" class="btn btn-danger">Eliminar</button></a> 
                    </div> 
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        
</div>
@endsection

