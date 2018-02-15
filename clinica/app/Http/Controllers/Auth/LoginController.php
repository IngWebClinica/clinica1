<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //primero creaamos la cuncion
    public function login(){
        //validamos los campos que enviamos
        $credentials=$this->validate(request(),[
            //arary con las regla de validacion
            'email'=>'email|required|string',
            'password'=>'|required|string'
        ]);
        //con esto verificamos el array de valores enviados
        if(Auth::attempt($credentials)){
            return 'tu seccion correcta';
        }

        return 'error';
    }
}
