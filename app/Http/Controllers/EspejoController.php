<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Espejo;
class EspejoController extends Controller
{
    public function getProducts(){
        $productos = Espejo::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Espejo.idProductoEspejo_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('espejos.espejos')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Espejo::
        join('producto','producto.idProducto','=','Espejo.idProductoEspejo_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Espejo::imagenes($id);

        return view('espejos.espejo')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
