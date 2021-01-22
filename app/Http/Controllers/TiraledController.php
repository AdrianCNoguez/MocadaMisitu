<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\TiraLed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class TiraLedController extends Controller
{
    public function getProducts(){
        $productos = tiraled::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','tira_leds.idProdTira_fk')          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('iluminacionExterior.tirasLed')->with('productos',$productos);
    }
}
