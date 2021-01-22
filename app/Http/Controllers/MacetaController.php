<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maceta;
class MacetaController extends Controller
{
    //
    public function getProducts(){
        $productos = Maceta::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Maceta.idProductoMaceta_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/decoracion_Hogar.maceta')->with('productos',$productos);
    }
}
