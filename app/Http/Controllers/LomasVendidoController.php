<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\LomasVendido;


class LomasVendidoController extends Controller
{
    public function getProducts(){
        $productos = LomasVendido::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','lomasvendido.idProducto_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('welcome')->with('productos',$productos);
    }

    public function getSale(){
        $productos = LomasVendido::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','lomasvendido.idProducto_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('losMasVendidos.masVendidos')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = LomasVendido::
        join('producto','producto.idProducto','=','lomasvendido.idProducto_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = LomasVendido::imagenes($id);

        return view('losMasVendidos.masVendido')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
    
}
