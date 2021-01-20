<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usersController extends Controller
{
    //muestra tabla con todos los usuarios 
    public function verUsers(){
        $usuarios = User::All();
        return view('usuarios',compact('usuarios'));
    }
    //muestra un formulario con usuario seleccionado
    public function usuario($id){
        $usuarios = User::find($id);
        return view('verUsuario',compact('usuarios'));
    }
    //muestra formulario con un usuario para editar 
    public function editUsuario($id){
        $usuarios = User::find($id);
        return view('editUsuario',compact('usuarios'));
    }

    public function actualizaUsuario(Request $req){
        //  $validado = $req->validate([
        //      'name'=> ['required'],
        //      'email' => ['required','email']
        //  ]);
        $usuario = User::find($req->id);

             $usuario->name = $req->name;
             $usuario->email = $req->email;

        $usuario->save();

        return back()->with('update_Good','Los datos fueron actualizados correctamente');
    }


}
