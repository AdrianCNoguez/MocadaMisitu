<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maceta;
class MacetaController extends Controller
{
    //
    public function getProducts(){
        $productos = Maceta::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Maceta.idProductoMaceta_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('macetas.macetas')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3); 

        $product = Maceta::
        join('producto','producto.idProducto','=','Maceta.idProductoMaceta_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Maceta::imagenes($id);
 
        return view('macetas.maceta')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
