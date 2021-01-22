<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Reflectores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ReflectoresController extends Controller
{
    public function getProducts(){
        $productos = reflectores::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','reflectores.idProductoRef_fk')          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('iluminacionExterior.reflectores')->with('productos',$productos);
    }

}
