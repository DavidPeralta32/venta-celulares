@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Carrito</h1>

    {{-- Agregar al carrito --}}
    <a href="{{url('productos/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Productos</a>
        <?php $valor = 0; ?> 
        @if(session('carrito'))
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio unitario</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Foto</th>
                </tr>
            </thead>
        @foreach(session('carrito') as $id=>$detalles)

           <?php $valor += $detalles['precio'] * $detalles['quantity']; ?>

           <tr>
               <th>hola{{ $detalles['name'] }}</th>
               <th>$ {{$detalles['precio']}}</th>
               <th>{{$detalles['quantity']}}</th>
               <th>$ {{$detalles['precio'] * $detalles['quantity']}}</th>
               <th>
                   <img src="{{$detalles['foto']}}" width="50" height="50">
               </th>
           </tr>
           @endforeach
        </table>
        @endif
     <table align="right">
         <th>
             <div class="badge badge-primary text-wrap" style="width:10rem;">
                 <p></p>
                 <p>Total ${{ $valor}}</p>
             </div>
         </th>
     </table> 
    {{-- Agregar al carrito --}}

</div>
@endsection

