<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mangueraleds;

class MangueraLedsController extends Controller
{
    public function getProducts(){
        $productos = Mangueraleds::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','mangueraleds.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('manguerasled.manguerasled')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Mangueraleds::
        join('producto','producto.idProducto','=','mangueraleds.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Mangueraleds::imagenes($id);


        return view('manguerasled.mangueraled')->with(compact('product', $product))->with(compact('imagenes',$imagenes));


    }
}
