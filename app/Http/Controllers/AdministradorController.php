<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function index(){
        $admin = Administrador::All();
        return view('listAdmin',compact('admin'));
    }

    public function loginAdmin(){
        return view('loginAdmin');
    }

    public function sesionAdmin(Request $req){
        // $admin = Administrador::where('correo','=', $req->correo)->where('password','=' ,$req->password)->first();

        $admin = Administrador::where('correo', $req->correo)->first();
        if (isset($admin)) {
            return view('listAdmin');

        }else{
            return back()->with('sesion_bad','Correo y/o contraseña incorrectos');
        }
        
    }
}
