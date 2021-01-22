<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cable;
class CableController extends Controller
{
    //
    public function getProducts(){
        $productos = Cable::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Cable.idProductoCable_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/componentesElectricos.cable')->with('productos',$productos);
    }
}
