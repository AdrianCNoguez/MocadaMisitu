<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\LomasVendido;


class LomasVendidoController extends Controller
{
    public function getProducts(){
        $productos = LomasVendido::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','lomasvendido.idProducto_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('welcome')->with('productos',$productos);
    }
}
