<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herrajes;
class HerrajesController extends Controller
{
    //
    public function getProducts(){
        $productos = Herrajes::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Herrajes.idProductoHerra_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/decoracion_Hogar.herrajes')->with('productos',$productos);
    }
}
