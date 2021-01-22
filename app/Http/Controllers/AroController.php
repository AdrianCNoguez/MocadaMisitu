<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aro;
class AroController extends Controller
{
    //
    public function getProducts(){
        $productos = Aro::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','aro.idProductoAro_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/iluminacionInterior.aro')->with('productos',$productos);
    }
}
