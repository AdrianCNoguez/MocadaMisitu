<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Macetas;
class MacetasController extends Controller
{
    //
    public function getProducts(){
        $productos = Macetas::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Macetas.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('macetas.macetas')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3); 

        $product = Macetas::
        join('producto','producto.idProducto','=','Macetas.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Macetas::imagenes($id);
 
        return view('macetas.maceta')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
