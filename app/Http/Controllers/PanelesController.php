<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Paneles;

class PanelesController extends Controller
{
    //
    public function getProducts(){
        $productos = Paneles::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','paneles.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('paneles.paneles')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Paneles::
        join('producto','producto.idProducto','=','paneles.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Paneles::imagenes($id);


        return view('paneles.panel')->with(compact('product', $product))->with(compact('imagenes',$imagenes));


    }
}
