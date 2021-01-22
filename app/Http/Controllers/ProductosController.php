<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\Storage;

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

    //crud productos

    public function showProductos(){
        $productos = Productos::All();
        return view('listProducto', compact('productos'));
    }

    public function crearProducto(){
        return view('crearProducto');
    }

    public function insertarProducto(Request $req){
        //    $validacion = $req->validate([
        //        'nombre'=> ['required'],
        //        'descripcion'=>['required'],
        //        'foto'=>['required','image'],
        //        'precio'=>['required','numeric'],
        //        'stock'=>['required','numeric'],
        //    ]);

        $imagen = $req->file('file')->store('public/celulares');
        $url = Storage::url($imagen);
        
         $productos = new Productos;

          $productos->nombre = $req->nombre;
          $productos->descripcion = $req->descripcion;
          $productos->foto = $url;
          $productos->precio = $req->precio;
          $productos->stock = $req->stock;

          $productos->save();

         return back()->with('insert_Good','El producto fue agregado correctamente');
    }

    public function verProducto($id){
            $producto = Productos::find($id);
            return view('verProducto', compact('producto'));
        
    }

    public function editarProducto($id){
        $producto = Productos::find($id);
            return view('editarProducto', compact('producto'));
    }

    public function actualizarProducto(Request $req){

        if(isset($req->file)){
            $imagen = $req->file('file')->store('public/celulares');
            $url = Storage::url($imagen);

            $producto = Productos::find($req->id);

            $producto->foto = $url;
            $producto->save();
        }
        
        $producto = Productos::find($req->id);

            $producto->nombre = $req->nombre;
            $producto->descripcion = $req->descripcion;
            $producto->precio = $req->precio;
            $producto->stock = $req->stock;

        $producto->save();

        return back()->with('update_Good','Los datos fueron actualizados correctamente');
    }
    public function eliminarProducto($id){
        $producto = Productos::find($id);

        $producto->delete();
        return back()->with('delete_Good','El producto fue eliminado correctamente');
    }

}
