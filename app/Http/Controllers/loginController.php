<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class loginController extends Controller
{
    //
    public function intoLogin(Request $request)
    {
        $data = DB::select("call login('" . $request->email . "','" . $request->password . "')");
        if (empty($data)) {
            //Redireccionamos al login (credenciales erroneas)
            return view("login", ["msj" => "Credenciales Incorrectas."]);
        } else {
            session(['dataUsuario' => json_encode($data[0])]);
            //login ok
            return redirect()->route('dashboard.dashboard');
        }
    }
    public function cerrarSesion()
    {
        session()->forget('dataUsuario');
        return redirect()->route('login.login');
    }

    public function crearUsuario(Request $request)
    {
        $usuario = ["nombre" => $request->nombre, "apellido" => $request->apellido, "cedula" => $request->cedula, "celular" => $request->celular, "email" => $request->email];
        //Creamos el usuario
        try {
            $data = DB::select("call crearUsuario('" . $usuario["nombre"] . "','" . $usuario["apellido"] . "','" . $usuario["cedula"] . "','" . $usuario["celular"] . "','" . $usuario["email"] . "','" . $request->password . "')");
            //Valdamos si el usuario se creo correctamente
            if (!empty($data)) {
                session(['dataUsuario' => json_encode($usuario)]);
                //login ok
                return redirect()->route('dashboard.dashboard');
            } else {
                return view("register", ["msj" => "Error en el sistema"]);
            }
        } catch (Exception $e) {
            return view("register", ["msj" => "Correo electronico ya existe."]);
        }
    }
}
