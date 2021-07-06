<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function dashboard()
    {
        $data = json_decode(session('dataUsuario'));
        //comprobamos que informacion en la session
        if (!empty($data)) {
            return view("dashboard", compact("data"));
        } else {
            return redirect()->route('login.login');
        }
    }
}
