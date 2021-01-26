<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Focos;

class FocosController extends Controller
{
    public function getProducts(){
        $productos = Focos::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Focos.idProducto_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('focos.focos')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Focos::
        join('producto','producto.idProducto','=','Focos.idProducto_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Focos::imagenes($id);


        return view('focos.foco')->with(compact('product', $product))->with(compact('imagenes',$imagenes));


    }
}
