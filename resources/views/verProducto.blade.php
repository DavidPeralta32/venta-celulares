@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Producto {{$producto->nombre}}</h1>
    
    <a href="{{url('listProducto/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Editar Productos</a>


    <div class="ver-producto" style="margin-top:15px;">
        <div class="card mb-3" style="max-width: 850px;">
            <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{$producto->foto}}" width="300" height="500" style="padding:10px;" >
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">ID</label>
                                <input type="text" class="form-control" value="{{$producto->id}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" value="{{$producto->nombre}}" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                                <input type="text" class="form-control" value="{{$producto->descripcion}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Precio</label>
                                <input type="text" class="form-control" value="{{$producto->precio}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Stock</label>
                                <input type="text" class="form-control" value="{{$producto->stock}}" >
                            </div>
                        </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

