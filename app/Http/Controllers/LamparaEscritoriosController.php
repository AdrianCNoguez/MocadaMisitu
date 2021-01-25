<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LamparaEscritorios;

class LamparaEscritoriosController extends Controller
{
    //
    public function getProducts(){
        $productos = LamparaEscritorios::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','lamparasescritorio.idProductoEscri_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/iluminacionInterior/lamparasescritorio')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = LamparaEscritorios::
        join('producto','producto.idProducto','=','lamparasescritorio.idProductoEscri_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = LamparaEscritorios::imagenes($id);

        return view('/iluminacionInterior/lamparaescritorio')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
