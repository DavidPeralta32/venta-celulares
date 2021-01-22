@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Home</h1>
    <a href="{{url('usuarios/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Usuarios</a>
    
    <a href="{{url('listProducto/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Editar Productos</a>


                     <div class="contenido" style="width:100%;margin-top:25px;display:flex;justify-content:center;">
            <section>
            <div class="card" style="width: 32rem;font-size:29px">
                <div class="card-header">
                    Integrantes
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Peralta Arenal David</li>
                    <li class="list-group-item">Lagunes Mirafuentes Jesus Alonso</li>
                </ul>
                <div class="card-header">
                    Materia:
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Arqui Web</li>
                </ul>
                <div class="card-header">
                    Hora:
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">7:00-8:00</li>
                </ul>
                </div>
            </section>
        </div>

       
</div>
@endsection

