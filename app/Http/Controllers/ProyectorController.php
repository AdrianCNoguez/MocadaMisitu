<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Proyector;

class ProyectorController extends Controller
{
    //
    public function getProducts(){
        $productos = Proyector::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Proyector.idProductoProyector_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/decoracion_Hogar.proyector')->with('productos',$productos);
    }
}
