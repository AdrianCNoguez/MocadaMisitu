<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Productos;

class ProductosController extends Controller
{
    public function traerProductos(){
        $producto = Productos::all();
        return view("welcome",array("producto" => $producto));
    }

    public function getProducts(){
        $products = Productos::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            
            return view('welcome')->with('prod',$products);
    }
}
