<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Humificadores;
class HumificadoresController extends Controller
{
    //difusores
    public function getProducts(){
        $productos = Humificadores::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Humidificadores.idProductoHumi_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/difusores.humificadores')->with('productos',$productos);
    }

}
