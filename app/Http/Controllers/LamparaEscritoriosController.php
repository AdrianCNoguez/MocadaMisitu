<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LamparasEscritorios;

class LamparaEscritoriosController extends Controller
{
    public function getProducts(){
        $productos = LamparasEscritorios::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','lamparasescritorios.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('lamparasescritorio.lamparasescritorios')->with('productos',$productos);
    }
    
    
    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = LamparasEscritorios::
        join('producto','producto.idProducto','=','lamparasescritorios.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = LamparasEscritorios::imagenes($id);


        return view('lamparasescritorio.lamparaescritorio')->with(compact('product', $product))->with(compact('imagenes',$imagenes));


    }
    
}
