<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class productosControllers extends Controller
{

    //

    public function getAll(Request $request, Client $client)
    {
        $data = json_decode(session('dataUsuario'));
        //comprobamos que informacion en la session
        if (empty($data)) {
            return redirect()->route('login.login');
        }

        $endPoint = "";
        $propiedades = [];
        $propiedadesPage = [];
        $activeElement = array(26);
        for ($i = 0; $i < 26; $i++) {
            $activeElement[$i] = "";
        }
        //Pregunta a donde quiere apuntar
        switch ($request->producto) {
            case "Comunas": {
                    $endPoint = "/API/barrancabermeja/comunas";
                    $propiedades = ["Comuna", "Estrato", "Numero de Habitantes"];
                    $propiedadesPage = ["titleProduct" => "Comunas", "subtitle" => "Todas las Comunas", "title" => "Obtener todas las comunas", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[0] = "active";
                    break;
                }
            case "Barrios": {
                    $endPoint = "/API/barrancabermeja/barrios";
                    $propiedades = ["Barrio", "Comuna", "Numero de Habitantes"];
                    $propiedadesPage = ["titleProduct" => "Barrios", "subtitle" => "Todos los Barrios", "title" => "Obtener todos los barrios", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[3] = "active";
                    break;
                }
            case "Bancos": {
                    $endPoint = "/API/barrancabermeja/bancos";
                    $propiedades = ["Banco", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Bancos", "subtitle" => "Todos los Bancos", "title" => "Obtener todos los bancos", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[6] = "active";
                    break;
                }
            case "Colegios": {
                    $endPoint = "/API/barrancabermeja/colegios";
                    $propiedades = ["Colegio", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web", "Sector", "Modalidad"];
                    $propiedadesPage = ["titleProduct" => "Colegios", "subtitle" => "Todos los Colegios", "title" => "Obtener todos los colegios", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[10] = "active";
                    break;
                }
            case "Universidades": {
                    $endPoint = "/API/barrancabermeja/universidades";
                    $propiedades = ["Universidad", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web", "Sector"];
                    $propiedadesPage = ["titleProduct" => "Universidades", "subtitle" => "Todas las Universidades", "title" => "Obtener todas las universidades", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[14] = "active";

                    break;
                }
            case "Hospitales": {
                    $endPoint = "/API/barrancabermeja/hospitales";
                    $propiedades = ["Hospital", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Hospitales", "subtitle" => "Todos los Hospitales", "title" => "Obtener todos los hospitales", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[18] = "active";
                    break;
                }
            case "Mensajerias": {
                    $endPoint = "/API/barrancabermeja/mensajerias";
                    $propiedades = ["Mensajeria", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Mensajerias", "subtitle" => "Todas las Mensajerias", "title" => "Obtener todas las mensajerias", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[22] = "active";
                    break;
                }
            default: {
                    return redirect()->route('dashboard.dashboard');
                }
        }
        $baseUrl = env('API_ENDPOINT');

        $responseHttp = Http::get($baseUrl . $endPoint);
        $response = $responseHttp->json();
        //Preguntamos si hubo respuesta
        if (!empty($response)) {
            if ($response["ok"]) {
                return view("getAll", compact('data', 'propiedades', 'response', 'propiedadesPage', 'activeElement'));
            } else {
                return "<h1>Ocurrio un error con el servidor de Service Web API UNIPAZ</h1>";
            }
        } else {
            return "<h1>Ocurrio un error con el servidor de Service Web API UNIPAZ</h1>";
        }
    }

    public function getByBarrio(Request $request, Client $client)
    {
        $data = json_decode(session('dataUsuario'));
        //comprobamos que informacion en la session
        if (empty($data)) {
            return redirect()->route('login.login');
        }

        $endPoint = "";
        $propiedades = [];
        $propiedadesPage = [];
        $activeElement = array(26);
        for ($i = 0; $i < 26; $i++) {
            $activeElement[$i] = "";
        }
        //Pregunta a donde quiere apuntar
        switch ($request->producto) {
            case "Bancos": {
                    $endPoint = "/API/barrancabermeja/barrios/" . $request->barrio . "/bancos";
                    $propiedades = ["Banco", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Bancos", "subtitle" => "Todos los Bancos por barrio", "title" => "Obtener todos los bancos por un barrio en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[7] = "active";
                    break;
                }
            case "Colegios": {
                    $endPoint = "/API/barrancabermeja/barrios/" . $request->barrio . "/colegios";
                    $propiedades = ["Colegio", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web", "Sector", "Modalidad"];
                    $propiedadesPage = ["titleProduct" => "Colegios", "subtitle" => "Todos los Colegios por barrio", "title" => "Obtener todos los colegios por un barrio en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[11] = "active";
                    break;
                }
            case "Universidades": {
                    $endPoint = "/API/barrancabermeja/barrios/" . $request->barrio . "/universidades";
                    $propiedades = ["Universidad", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web", "Sector"];
                    $propiedadesPage = ["titleProduct" => "Universidades", "subtitle" => "Todas las Universidades por barrio", "title" => "Obtener todas las universidades por un barrio en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[15] = "active";
                    break;
                }
            case "Hospitales": {
                    $endPoint = "/API/barrancabermeja/barrios/" . $request->barrio . "/hospitales";
                    $propiedades = ["Hospital", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Hospitales", "subtitle" => "Todos los Hospitales por barrio", "title" => "Obtener todos los hospitales por un barrio en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[19] = "active";
                    break;
                }
            case "Mensajerias": {
                    $endPoint = "/API/barrancabermeja/barrios/" . $request->barrio . "/mensajerias";
                    $propiedades = ["Mensajeria", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Mensajerias", "subtitle" => "Todas las Mensajerias por barrio", "title" => "Obtener todas las mensajerias por un barrio en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[23] = "active";
                    break;
                }
            default: {
                    return redirect()->route('dashboard.dashboard');
                }
        }
        $baseUrl = env('API_ENDPOINT');

        $responseHttp = Http::get($baseUrl . $endPoint);
        $response = $responseHttp->json();
        //Preguntamos si hubo respuesta
        if (!empty($response)) {
            if ($response["ok"]) {
                return view("getByBarrio", compact('data', 'propiedades', 'response', 'propiedadesPage', 'activeElement'));
            } else {
                return "<h1>Ocurrio un error con el servidor de Service Web API UNIPAZ</h1>";
            }
        } else {
            return "<h1>Ocurrio un error con el servidor de Service Web API UNIPAZ</h1>";
        }
    }

    public function getByComuna(Request $request, Client $client)
    {
        $data = json_decode(session('dataUsuario'));
        //comprobamos que informacion en la session
        if (empty($data)) {
            return redirect()->route('login.login');
        }

        $endPoint = "";
        $propiedades = [];
        $propiedadesPage = [];
        $activeElement = array(26);
        for ($i = 0; $i < 26; $i++) {
            $activeElement[$i] = "";
        }
        //Pregunta a donde quiere apuntar
        switch ($request->producto) {
            case "Comunas": {
                    $endPoint = "/API/barrancabermeja/comunas/" . $request->comuna;
                    $propiedades = ["Comuna", "Estrato", "Numero de Habitantes"];
                    $propiedadesPage = ["titleProduct" => "Comunas", "subtitle" => "Una comuna en especifico", "title" => "Obtener la información de una comuna", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[1] = "active";
                    break;
                }
            case "Barrios": {
                    $endPoint = "/API/barrancabermeja/barrios/" . $request->comuna;
                    $propiedades = ["Barrio", "Comuna", "Numero de Habitantes"];
                    $propiedadesPage = ["titleProduct" => "Barrios", "subtitle" => "Todos los Barrios por comuna", "title" => "Obtener todos los barrios por una comuna en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[4] = "active";
                    break;
                }
            case "Bancos": {
                    $endPoint = "/API/barrancabermeja/comunas/" . $request->comuna . "/bancos";
                    $propiedades = ["Banco", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Bancos", "subtitle" => "Todos los Bancos por comuna", "title" => "Obtener todos los bancos por una comuna en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[8] = "active";
                    break;
                }
            case "Colegios": {
                    $endPoint = "/API/barrancabermeja/comunas/" . $request->comuna . "/colegios";
                    $propiedades = ["Colegio", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web", "Sector", "Modalidad"];
                    $propiedadesPage = ["titleProduct" => "Colegios", "subtitle" => "Todos los Colegios por comuna", "title" => "Obtener todos los colegios por una comuna en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[12] = "active";
                    break;
                }
            case "Universidades": {
                    $endPoint = "/API/barrancabermeja/comunas/" . $request->comuna . "/universidades";
                    $propiedades = ["Universidad", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web", "Sector"];
                    $propiedadesPage = ["titleProduct" => "Universidades", "subtitle" => "Todas las Universidades por comuna", "title" => "Obtener todas las universidades por una comuna en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[16] = "active";
                    break;
                }
            case "Hospitales": {
                    $endPoint = "/API/barrancabermeja/comunas/" . $request->comuna . "/hospitales";
                    $propiedades = ["Hospital", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Hospitales", "subtitle" => "Todos los Hospitales por comuna", "title" => "Obtener todos los hospitales por una comuna en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[20] = "active";
                    break;
                }
            case "Mensajerias": {
                    $endPoint = "/API/barrancabermeja/comunas/" . $request->comuna . "/mensajerias";
                    $propiedades = ["Mensajeria", "Comuna", "Estrato", "Barrio", "Numero de Habitantes", "Dirección", "Telefono", "Sitio Web"];
                    $propiedadesPage = ["titleProduct" => "Mensajerias", "subtitle" => "Todas las Mensajerias por comuna", "title" => "Obtener todas las mensajerias por una comuna en especifico", "description" => "Este servicio consume datos de API REST UNIPAZ"];
                    $activeElement[24] = "active";
                    break;
                }
            default: {
                    return redirect()->route('dashboard.dashboard');
                }
        }
        $baseUrl = env('API_ENDPOINT');

        $responseHttp = Http::get($baseUrl . $endPoint);
        $response = $responseHttp->json();
        //Preguntamos si hubo respuesta
        if (!empty($response)) {
            if ($response["ok"]) {
                return view("getByComuna", compact('data', 'propiedades', 'response', 'propiedadesPage', 'activeElement'));
            } else {
                return "<h1>Ocurrio un error con el servidor de Service Web API UNIPAZ</h1>";
            }
        } else {
            return "<h1>Ocurrio un error con el servidor de Service Web API UNIPAZ</h1>";
        }
    }

    public function insertar(Request $request)
    {
        $data = json_decode(session('dataUsuario'));
        //comprobamos que informacion en la session
        if (empty($data)) {
            return redirect()->route('login.login');
        }
        $propiedades = [];
        $propiedadesPage = [];
        $activeElement = array(26);
        for ($i = 0; $i < 26; $i++) {
            $activeElement[$i] = "";
        }
        //Pregunta a donde quiere apuntar
        switch ($request->producto) {
            case "Comunas": {
                    $propiedades = ["Comuna", "Estrato", "Numero de Habitantes"];
                    $name_propiedades = ["numero_comuna",  "estrato", "numero_habitantes"];
                    $propiedadesPage = ["titleProduct" => "Comunas", "subtitle" => "Insertar Comuna", "title" => "Obtener la información de una comuna"];
                    $activeElement[2] = "active";
                    break;
                }
            case "Barrios": {
                    $propiedades = ["Barrio", "Comuna", "Numero de Habitantes"];
                    $name_propiedades = ["nombre_barrio", "numero_comuna", "numero_habitantes"];
                    $propiedadesPage = ["titleProduct" => "Barrios", "subtitle" => "Insertar Barrio", "title" => "Obtener todos los barrios por una comuna en especifico"];
                    $activeElement[5] = "active";
                    break;
                }
            case "Bancos": {
                    $propiedades = ["Banco", "Barrio", "Dirección", "Telefono", "Sitio Web"];
                    $name_propiedades = ["nombre_banco", "nombre_barrio", "direccion", "telefono", "sitio_web"];
                    $propiedadesPage = ["titleProduct" => "Bancos", "subtitle" => "Insertar Banco", "title" => "Obtener todos los bancos por una comuna en especifico"];
                    $activeElement[9] = "active";
                    break;
                }
            case "Colegios": {
                    $propiedades = ["Colegio", "Barrio", "Dirección", "Telefono", "Sitio Web", "Sector", "Modalidad"];
                    $name_propiedades = ["nombre_colegio", "nombre_barrio", "direccion", "telefono", "sitio_web", "sector", "modalidad"];
                    $propiedadesPage = ["titleProduct" => "Colegios", "subtitle" => "Insertar Colegio", "title" => "Obtener todos los colegios por una comuna en especifico"];
                    $activeElement[13] = "active";
                    break;
                }
            case "Universidades": {
                    $propiedades = ["Universidad", "Barrio", "Dirección", "Telefono", "Sitio Web", "Sector"];
                    $name_propiedades = ["nombre_universidad", "nombre_barrio", "direccion", "telefono", "sitio_web", "sector"];
                    $propiedadesPage = ["titleProduct" => "Universidades", "subtitle" => "Insertar Universidad", "title" => "Obtener todas las universidades por una comuna en especifico"];
                    $activeElement[17] = "active";
                    break;
                }
            case "Hospitales": {
                    $propiedades = ["Hospital", "Barrio", "Dirección", "Telefono", "Sitio Web"];
                    $name_propiedades = ["nombre_hospital", "nombre_barrio", "direccion", "telefono", "sitio_web"];
                    $propiedadesPage = ["titleProduct" => "Hospitales", "subtitle" => "Insertar Hospital", "title" => "Obtener todos los hospitales por una comuna en especifico"];
                    $activeElement[21] = "active";
                    break;
                }
            case "Mensajerias": {
                    $propiedades = ["Mensajeria", "Barrio", "Dirección", "Telefono", "Sitio Web"];
                    $name_propiedades = ["nombre_mensajeria", "nombre_barrio", "direccion", "telefono", "sitio_web"];
                    $propiedadesPage = ["titleProduct" => "Mensajerias", "subtitle" => "Insertar Mensajeria", "title" => "Obtener todas las mensajerias por una comuna en especifico"];
                    $activeElement[25] = "active";
                    break;
                }
            default: {
                    return redirect()->route('dashboard.dashboard');
                }
        }

        return view("insertar", compact('data', 'propiedades', 'name_propiedades', 'propiedadesPage', 'activeElement'));
    }

    public function insertarServer(Request $request, Client $client)
    {
        $data = json_decode(session('dataUsuario'));
        //comprobamos que informacion en la session
        if (empty($data)) {
            return redirect()->route('login.login');
        }
        $endPoint = "";
        //Pregunta a donde quiere apuntar
        switch ($request->producto) {
            case "Comunas": {
                    $endPoint = "/API/barrancabermeja/comunas";
                    break;
                }
            case "Barrios": {
                    $endPoint = "/API/barrancabermeja/barrios";
                    break;
                }
            case "Bancos": {
                    $endPoint = "/API/barrancabermeja/bancos";
                    break;
                }
            case "Colegios": {
                    $endPoint = "/API/barrancabermeja/colegios";
                    break;
                }
            case "Universidades": {
                    $endPoint = "/API/barrancabermeja/universidades";
                    break;
                }
            case "Hospitales": {
                    $endPoint = "/API/barrancabermeja/hospitales";
                    break;
                }
            case "Mensajerias": {
                    $endPoint = "/API/barrancabermeja/mensajerias";
                    break;
                }
            default: {
                    return redirect()->route('dashboard.dashboard');
                }
        }
        $baseUrl = env('API_ENDPOINT');
        error_log(json_encode($request->all()));
        $responseHttp = Http::post($baseUrl . $endPoint, $request->all());
        $response = $responseHttp->json();
        //Preguntamos si hubo respuesta
        if (!empty($response)) {
            if ($response["ok"]) {
                return redirect()->route('dashboard.dashboard');
            } else {
                return "<h1>Ocurrio un error con el servidor de Service Web API UNIPAZ</h1>";
            }
        } else {
            return "<h1>Ocurrio un error con el servidor de Service Web API UNIPAZ</h1>";
        }
        return redirect()->route('dashboard.dashboard');
    }
}
