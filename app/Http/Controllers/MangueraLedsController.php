<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mangueraleds;

class MangueraLedsController extends Controller
{
    //
    public function getProducts(){
        $productos = Mangueraleds::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','mangueraled.idProductoMangue_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/iluminacionInterior/manguerasled')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Mangueraleds::
        join('producto','producto.idProducto','=','mangueraled.idProductoMangue_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Mangueraleds::imagenes($id);

        return view('/iluminacionInterior/mangueraled')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
