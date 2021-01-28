@extends('layouts.app')

@section('content')
    <!-- Link para ir a la vista carrito -->
    <div class="cabecera" style="width:100%;display:flex; justify-content:center;margin:15px;">
        <h1 style="text-shadow: 2px 2px 5px red;">Productos</h1>
                
    </div>
    <div class="mesanjes" style="width:100%;display:flex; justify-content:center;margin:15px;">
        @if(Session::has('stock_bad'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('stock_bad')}}
            </div>
        @endif
    </div>
    
<div class="container" style=" background: rgba(135, 93, 177, 0.5);width:100%; display:flex; flex-wrap:wrap ;justify-content:center;align-content: space-between;">
        <!-- foreach que me muestra todos los productos que tengo en mi base de datos  -->
       
    @foreach($productos as $producto)
     <div class="productos" style="margin:15px; box-shadow: 10px 10px 5px grey;">
            {{-- Agregar productos --}}
            <div class="card">
                <div class="card-header">
                {{$producto->nombre}}
                </div>
                <div class="card-body">
                    <div class="col-6">
                        <img src="{{$producto->foto}}" width="300" height="200" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <h4></h4>
                        <p>{{$producto->descripcio }}</p>
                        <p> <strong>Precio: </strong>$ {{$producto->precio}} </p>
                        <!-- botones -->
                        <a style="margin-bottom:8px;" href="{{url('compraformulario/'.$producto->id)}}" class="btn btn-primary btn-lg
                        btn-bloc" role="button" aria-pressed="true">Comprar</a>

                        <a href="{{url('detalle/'.$producto->id)}}" class="btn btn-primary btn-lg
                        btn-bloc" role="button" aria-pressed="true">Detalles</a>   
                    </div>
                </div>
            </div>       
            {{-- Agregar productos --}}
        </div>
        @endforeach
        
   
</div>
@endsection

