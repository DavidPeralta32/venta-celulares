@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Productos</h1>
    {{-- Agregar productos --}}
    <!-- Link para ir a la vista carrito -->
    <a href="{{url('carrito/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Ir al carrito</a>
    <!-- Link para ir a la vista home -->
    <a href="{{url('home/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Home</a>
        <div class="row">
        <!-- foreach que me muestra todos los productos que tengo en mi base de datos  -->
            @foreach($productos as $producto)
                <div class="col-6">
                    <img src="{{$producto->foto}}" width="300" height="100">
                    <h4>{{$producto->nombre}}</h4>
                    <p>{{$producto->descripcio }}</p>
                    <p> <strong>Precio: </strong>$ {{$producto->precio}} </p>

                    <a href="{{url('addcarrito/'.$producto->id)}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Agregar al carrito</a>

                    <a href="{{url('detalle/'.$producto->id)}}" class="btn btn-primary btn-lg
                    btn-bloc" role="button" aria-pressed="true">Detalles</a>
                </div>
                
            @endforeach
        </div>
    {{-- Agregar productos --}}
</div>
@endsection

