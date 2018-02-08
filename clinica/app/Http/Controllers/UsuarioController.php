<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;


class UsuarioController extends Controller
{
    //creamos a funcion para poder agregar una tabla
    public function create(Request $request){
        $usuario = new usuario();
        
        $usuario -> nombre = $request -> nombre;
        $usuario -> apellido = $request -> apellido;
        $usuario -> nick = $request -> nick;
        $usuario -> contrasena = $request -> contra;
        $usuario -> tipo_usuario = $request -> tipo;
        $usuario->save();
        return redirect('/usuario');
    }
    public function read(Request $request){
        $usuarios = usuario::all();
        return view('/usuario',['usuarios'=>$usuarios]);
    }
    public function delete($id){
        $usuario=usuario::findOrFail($id);
        $usuario->delete();
        return redict('/usuario');
    }
}
