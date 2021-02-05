<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extenciones;
class ExtencionesController extends Controller
{
    public function getProducts(){
        $productos = Extenciones::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Extenciones.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('extenciones.extenciones')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Extenciones::
        join('producto','producto.idProducto','=','Extenciones.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Extenciones::imagenes($id);

        return view('extenciones.extencion')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
