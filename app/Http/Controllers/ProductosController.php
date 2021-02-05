<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Productos;

class ProductosController extends Controller
{

    public function getProducts(){
        $produc = Productos:: 
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('welcome')->with('produc',$produc);
    }
}
