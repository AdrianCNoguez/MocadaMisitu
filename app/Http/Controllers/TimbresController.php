<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use App\Timbres;

class TimbresController extends Controller
{
    public function getProducts(){
        $productos = Timbres::select('producto.idProducto','producto.nombre','producto.descripcion','imagenes.ruta')
        ->join('producto','producto.idProducto','=','timbres.idProdutoTimbre_fk')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->get()->groupBy('idProducto');

        return view('timbres.timbres')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Timbres::
        join('producto','producto.idProducto','=','timbres.idProdutoTimbre_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Timbres::imagenes($id);

        return view('timbres.timbre')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
