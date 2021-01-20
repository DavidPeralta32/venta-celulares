@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle Producto</h1>
    {{-- Agregar productos --}}
    <a href="{{url('productos/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Productos</a>
        <div class="row">
                <div class="col-6">
                    <img src="{{$producto->foto}}" width="300" height="100">
                    <h4>{{$producto->nombre}}</h4>
                    <p>{{$producto->descripcio }}</p>
                    <p> <strong>Precio: </strong>$ {{$producto->precio}} </p>

                </div>
        </div>
    {{-- Agregar productos --}}

</div>
@endsection

