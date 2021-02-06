<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Despachadores;
class DespachadoresController extends Controller
{
    //
    public function getProducts(){
        $productos = Despachadores::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','despachadores.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('despachadores.despachadores')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Despachadores::
        join('producto','producto.idProducto','=','despachadores.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Despachadores::imagenes($id);

        return view('despachadores.despachador')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
