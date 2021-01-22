<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mangueraleds;

class MangueraLedsController extends Controller
{
    //
    public function getProducts(){
        $productos = Mangueraleds::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','mangueraled.idProductoMangue_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/iluminacionInterior.mangueraled')->with('productos',$productos);
    }
}
