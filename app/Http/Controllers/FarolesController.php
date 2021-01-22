<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Faroles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class FarolesController extends Controller
{
    public function getProducts(){
        $productos = faroles::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','faroles.idProductoFarol_fk')          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('iluminacionExterior.faroles')->with('productos',$productos);
    }

}