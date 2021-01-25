<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Espejo;
class EspejoController extends Controller
{
    //Espejo 
    /*
    public function getProducts(){
        $productos = Espejo::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Espejo.idProductoEspejo_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            //return view('/decoracion_Hogar.espejo')->with('productos',$productos);
            return response(json_encode($productos),200)->header('Content-type', 'text/plain');
    }
    */


    public function getProducts(){
        $productos = Espejo::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Espejo.idProductoEspejo_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            //->where('forma', '=', 'Redondo')
            ->get()->groupBy('idProducto');
           return view('/decoracion_Hogar/espejos')->with('productos',$productos);
           //return response(json_encode($productos),200)->header('Content-type', 'text/plain');
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Espejo::
        join('producto','producto.idProducto','=','Espejo.idProductoEspejo_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Espejo::imagenes($id);

        return view('consola')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
