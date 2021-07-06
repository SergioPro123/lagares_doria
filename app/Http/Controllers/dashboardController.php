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
            $activeElement = array(27);
            for ($i = 0; $i < 27; $i++) {
                $activeElement[$i] = "";
            }
            $activeElement[26] = "active";
            return view("dashboard", compact("data", "activeElement"));
        } else {
            return redirect()->route('login.login');
        }
    }
}
