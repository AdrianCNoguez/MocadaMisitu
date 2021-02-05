<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dispensadores;

class DispensadoresController extends Controller
{
    //
    public function getProducts(){
        $productos = Dispensadores::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','disoensadores.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('dispensadores.dispensadores')->with('productos',$productos);
    }


    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Dispensadores::
        join('producto','producto.idProducto','=','disoensadores.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Dispensadores::imagenes($id);

        return view('dispensadores.dispensador')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
