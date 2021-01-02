<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagenes;

class ImagenesController extends Controller
{
    public function getImages()
    {
        $productos = Imagenes::
    select('producto.idProducto','producto.nombre','imagenes.ruta')
    ->join('producto','producto.idProducto','=','imagenes.idProductoImagen_fk')
    ->join('lomasvendido','lomasvendido.idProducto_fk','=','producto.idProducto')
    ->get()->groupBy('idProducto');
    return view('welcome')->with('productos',$productos);


    }

}
