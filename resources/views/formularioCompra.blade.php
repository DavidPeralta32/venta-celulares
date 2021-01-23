<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Formulario Compra</title>
</head>
<body>
    <div class="contenido" style="width:100%;display:flex; justify-content:center; margin:30px">
        <div class="formulario" style="width:45%">
            <div class="card">
            <h1 class="card-header">Compra</h1>
            <a href="{{url('productos/')}}" class="btn btn-primary btn-lg
                     btn-bloc" role="button" aria-pressed="true">Productos</a>
                <div class="card-body">
                    <form method="post" action="{{route('compra.producto')}}">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="correo" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">ID Producto</label>
                            <input type="text" class="form-control" name="id" value ="{{$producto->id}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre Producto</label>
                            <input type="text" class="form-control" name="producto" value="{{$producto->nombre}}" readonly>
                        </div>
                        @if(Session::has('compra_Good'))
                            <div class="alert alert-success" role="alert">
                            {{Session::get('compra_Good')}}
                            </div>
                            @endif
                            @if(Session::has('compra_bad'))
                                <div class="alert alert-danger" role="alert">
                                    {{Session::get('compra_bad')}}
                                </div>
                            @endif
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>