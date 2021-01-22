<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extenciones;
class ExtencionesController extends Controller
{
    //
    public function getProducts(){
        $productos = Extenciones::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Extenciones.idProductoExt')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/componentesElectricos.extenciones')->with('productos',$productos);
    }
}
