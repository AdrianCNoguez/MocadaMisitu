<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Focos;

class FocosController extends Controller
{
    public function getProducts(){
        $productos = focos::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Focos.idProducto_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/iluminacionInterior.focos')->with('productos',$productos);
    }
}
