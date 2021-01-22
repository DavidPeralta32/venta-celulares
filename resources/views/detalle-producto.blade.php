@extends('layouts.app')

@section('content')
<div class="cabecera" style="width:100%;display:flex; justify-content:center;margin:15px;">
    <h1 style="margin-right:25px;">Detalle Producto</h1>
    <a href="{{url('productos/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Productos</a>
    </div>

<div class="container" style="width:100%; display:flex; justify-content:center;">
        {{-- Agregar productos --}}
        <div class="row">
                <div class="col-6">
                    <img src="{{$producto->foto}}" width="400" height="400" style="margin:20px 0;">
                    <h4>{{$producto->nombre}}</h4>
                    <p>{{$producto->descripcio }}</p>
                    <p> <strong>Precio: </strong>$ {{$producto->precio}} </p>
                    <p> <strong>Stock: </strong> {{$producto->stock}} </p>

                </div>
        </div>
    {{-- Agregar productos --}}

</div>
@endsection

