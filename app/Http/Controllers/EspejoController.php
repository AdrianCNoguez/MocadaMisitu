<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Espejo;
class EspejoController extends Controller
{
    //Espejo 
    public function getProducts(){
        $productos = Espejo::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Espejo.idProductoEspejo_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/decoracion_Hogar.espejo')->with('productos',$productos);
    }
}
