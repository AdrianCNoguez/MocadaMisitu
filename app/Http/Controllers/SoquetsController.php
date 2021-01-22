<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Soquets;
class SoquetsController extends Controller
{
    //
    public function getProducts(){
        $productos = Soquets::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Soquets.idProductoSoquet_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/componentesElectricos.soquets')->with('productos',$productos);
    }
}
