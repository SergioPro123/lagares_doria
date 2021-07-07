<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class dashboardController extends Controller
{
    //
    public function dashboard(Client $client)
    {
        $data = json_decode(session('dataUsuario'));
        //comprobamos que informacion en la session
        if (!empty($data)) {
            $activeElement = array(27);
            for ($i = 0; $i < 27; $i++) {
                $activeElement[$i] = "";
            }
            $activeElement[26] = "active";
            $totales =  $this->totalesProductos($client);

            return view("dashboard", compact("data", "activeElement", "totales"));
        } else {
            return redirect()->route('login.login');
        }
    }

    private function totalesProductos(Client $client)
    {
        $baseUrl = env('API_ENDPOINT');
        $client = new Client(['base_uri' =>  $baseUrl]);

        // Initiate each request but do not block
        $promises = [
            'comunas' => $client->getAsync('/API/barrancabermeja/comunas'),
            'barrios'   => $client->getAsync('/API/barrancabermeja/barrios'),
            'mensajerias'  => $client->getAsync('/API/barrancabermeja/mensajerias'),
            'hospitales'  => $client->getAsync('/API/barrancabermeja/hospitales'),
            'bancos'  => $client->getAsync('/API/barrancabermeja/bancos'),
            'universidades'  => $client->getAsync('/API/barrancabermeja/universidades'),
            'colegios'  => $client->getAsync('/API/barrancabermeja/colegios'),
        ];
        $responses = Promise\Utils::settle($promises)->wait();

        $comunas = json_decode($responses['comunas']['value']->getBody());
        $barrios = json_decode($responses['barrios']['value']->getBody());
        $mensajerias = json_decode($responses['mensajerias']['value']->getBody());
        $hospitales = json_decode($responses['hospitales']['value']->getBody());
        $bancos = json_decode($responses['bancos']['value']->getBody());
        $universidades = json_decode($responses['universidades']['value']->getBody());
        $colegios = json_decode($responses['colegios']['value']->getBody());

        $totales = ["comunas" => count($comunas->data), "barrios" => count($barrios->data), "mensajerias" => count($mensajerias->data), "hospitales" => count($hospitales->data), "bancos" => count($bancos->data), "universidades" => count($universidades->data), "colegios" => count($colegios->data)];
        return $totales;
    }
}
