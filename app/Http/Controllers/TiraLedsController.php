<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TiraLeds;
class TiraLedsController extends Controller
{
    //
    public function getProducts(){
        $productos = TiraLeds::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','tiraled.idProdTira_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/iluminacionInterior.tiraled')->with('productos',$productos);
    }
}
