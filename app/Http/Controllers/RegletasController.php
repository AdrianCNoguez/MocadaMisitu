<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regletas;
class RegletasController extends Controller
{
    //
    public function getProducts(){
        $productos = Regletas::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','regletas.idProductoRegleta_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/iluminacionInterior.regletas')->with('productos',$productos);
    }
}
