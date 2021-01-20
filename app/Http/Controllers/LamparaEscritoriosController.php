<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LamparaEscritorios;

class LamparaEscritoriosController extends Controller
{
    //
    public function getProducts(){
        $productos = LamparaEscritorios::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','lamparasescritorio.idProductoEscri_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/iluminacionInterior.lamparasescritorio')->with('productos',$productos);
    }
}
