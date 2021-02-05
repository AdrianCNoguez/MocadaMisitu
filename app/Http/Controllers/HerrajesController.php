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
            ->join('producto','producto.idProducto','=','herrajes.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('herrajes.herrajes')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Herrajes::
        join('producto','producto.idProducto','=','Herrajes.idProducto')
        ->join('tiporosca','tiporosca.idRosca','=','Herrajes.tipoRoscaHerra_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Herrajes::imagenes($id);

        return view('herrajes.herraje')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
