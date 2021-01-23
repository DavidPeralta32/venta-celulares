<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Productos;
use App\Mail\MAndarMail;
use Mail;

class MailController extends Controller
{
    public function mandarCorreo(){

        // $data = ['name' => 'David'];
        // Mail::to('davi32peralta@gmail.com')->send(new MandarMail($data));
    }

    //funcion para saber si aun hay productos en el stock y redirigirnos
    public function formularioCompra($id){
        $producto = Productos::find($id);
        $stock = $producto->stock;
        if ($stock == 0) {
            return back()->with('stock_bad','Producto agotado');
        }else{
            return view ('formularioCompra',compact('producto'));
        }
        
    }

    public function compraProducto(Request $req){
        //guardar lo que viene de request
        $correo = $req->correo;
        $id = $req->id;
        $direccion = $req->direccion;
        $producto = $req->producto;

        //Buscar el stock del producto
        $productos = Productos::find($id);
        $stock = $productos->stock;

        if (isset($correo) && isset($direccion)) {
            //si se acepta la compra descontar uno en stock
            $stock -= 1;
            $productos->stock = $stock;
            $productos->save();
            //mandar los datos al correo 
            $data = ['name' => 'Gracias por su compra!!','direccion'=> $direccion,'producto'=>$producto];
            Mail::to($correo)->send(new MandarMail($data));

            return back()->with('compra_Good','Producto comprado');

        }else{
            return back()->with('compra_bad','Rellenar todos los campos');
        }
        
    }
}
