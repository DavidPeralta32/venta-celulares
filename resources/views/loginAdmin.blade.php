@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inicio de sesion Administrador</h1>

    <form method="post" action="{{route('sesion.admin')}}">
     @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="correo" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
    @if(Session::has('sesion_bad'))
        <div class="alert alert-success" role="alert">
        {{Session::get('sesion_bad')}}
        </div>
    @endif 
  <button type="submit" class="btn btn-primary">Iniciar</button>
</form>
                    
       
</div>
@endsection

