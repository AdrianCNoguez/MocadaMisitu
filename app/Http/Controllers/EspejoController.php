<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Espejos;
class EspejoController extends Controller
{
    public function getProducts(){
        $productos = Espejos::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Espejos.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('espejos.espejos')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Espejos::
        join('producto','producto.idProducto','=','Espejos.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Espejos::imagenes($id);

        return view('espejos.espejo')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
