@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card" style="font-size:23px">
        <h3 class="card-header">Editar {{$producto->nombre}}</h3>
        <div class="card-body">
        <a href="{{url('listProducto/')}}" class="btn btn-primary btn-lg
                            btn-bloc" role="button" aria-pressed="true">Lista Productos</a>

            <div class="edit-producto">
                <form action="{{route('actualizar.producto')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" name="id" class="form-control" value="{{$producto->id}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
                        @error('nombre')
                            <small class="text-danger">{{message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}">
                        @error('descripcion')
                            <small class="text-danger">{{message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Precio</label>
                        <input type="number" name="precio" class="form-control" value="{{$producto->precio}}">
                        @error('precio')
                            <small class="text-danger">{{message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Stock</label>
                        <input type="text" name="stock" class="form-control" value="{{$producto->stock}}">
                        @error('stock')
                            <small class="text-danger">{{message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="file" name="file" accept="image/*" value="{{$producto->foto}}">
                        @error('file')
                            <small class="text-danger">{{message}}</small>
                        @enderror
                    </div>
                    @if(Session::has('update_Good'))
                    <div class="alert alert-success" role="alert">
                    {{Session::get('update_Good')}}
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary" style="font-size:20px;">Actualizar</button>
                </form>
            </div>
    </div>
    

</div>
@endsection

