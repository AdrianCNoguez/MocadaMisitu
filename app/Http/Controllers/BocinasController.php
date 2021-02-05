<?php

namespace App\Http\Controllers;

use App\Bocinas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BocinasController extends Controller
{
    public function getProducts(){
        $productos = Bocinas::select('producto.idProducto','producto.nombre','producto.descripcion','imagenes.ruta')
        ->join('producto','producto.idProducto','=','bocinas.idProducto')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->get()->groupBy('idProducto');

        return view('bocinas.bocinas')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Bocinas::
        join('producto','producto.idProducto','=','bocinas.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Bocinas::imagenes($id);


        return view('bocinas.bocina')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
