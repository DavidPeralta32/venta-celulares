<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    //lista todos los productos
    public function productos(){
        $productos = Productos::all();
        return view('productos',compact('productos'));
    }
    ///ver vista de los detalles del producto
    public function detalleProducto($id){
        $producto = Productos::find($id);
        return view('detalle-producto')->with('producto',$producto);
    }
    //ver vista carrito
    public function carrito(){
        return view ('carrito');
    }
    //agregar producto al carrito
    public function agregarCarrito($id){
        $producto = Productos::find($id);
        $carrito = session()->get('carrito');

            if(!$carrito){
                $carrito =[
                    $id=>[

                    "nombre"=> $producto->nombre,
                    "quantity"=>1,
                    "precio"=>$producto->precio,
                    "foto"=>$producto->foto
                    ]
                ];
                session()->put('carrito',$carrito);
                return redirect()->back()->with('success','Producto agregado al carrito');
            }
            
            if(isset($carrito[$id])){
                $carrito[$id]['quantity']++;

                session()->put('carrito',$carrito);
                return redirect()->back()->with('success','Producto agregado al carrito');

            }
            $carrito[$id] = [
                "nombre" => $producto->nombre,
                "quantity"=>1,
                "precio"=>$producto->precio,
                "foto"=> $producto->foto
            ];
            
            session()->put('carrito',$carrito);
            return redirect()->back()->with('success','Producto agregado al carrito');

    }


}
