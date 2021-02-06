<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cables;
class CableController extends Controller
{
    public function getProducts(){
        $productos = Cables::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Cables.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('cable.cables')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Cables::
        join('producto','producto.idProducto','=','Cables.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Cables::imagenes($id);

        return view('cable.cable')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }


}
