@extends('layouts.app')

@section('content')
<div class="container" style="font-size:22px">

<div class="card">
  <h2 class="card-header">Crear producto</h2>
  <div class="card-body">
  <a href="{{url('listProducto/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">listar Productos</a>

    <div class="crear-producto">
        <form action="{{route('insertar.producto')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" name="descripcion" class="form-control">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="number" name="precio" class="form-control">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="text" name="stock" class="form-control">
               
            </div>
            <div class="mb-3">
                <input type="file" name="file" accept="image/*">
                
            </div>
            @if(Session::has('insert_Good'))
            <div class="alert alert-success" role="alert">
            {{Session::get('insert_Good')}}
            </div>
            @endif
            <button type="submit" class="btn btn-primary" style="font-size:18px">Crear Producto</button>
        </form>
    </div>
  </div>
</div>

    

</div>
@endsection

