<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cable;
class CableController extends Controller
{
    //
    public function getProducts(){
        $productos = Cable::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Cable.idProductoCable_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('cable.cables')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Cable::
        join('producto','producto.idProducto','=','Cable.idProductoCable_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Cable::imagenes($id);

        return view('cable.cable')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }


}
