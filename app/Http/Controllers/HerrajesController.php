<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herrajes;
class HerrajesController extends Controller
{
    //
    public function getProducts(){
        $productos = Herrajes::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Herrajes.idProductoHerra_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/decoracion_Hogar/herrajes')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Herrajes::
        join('producto','producto.idProducto','=','Herrajes.idProductoHerra_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Herrajes::imagenes($id);

        return view('herraje')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
