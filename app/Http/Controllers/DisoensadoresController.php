<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Disoensadores;
class DisoensadoresController extends Controller
{
    //
    public function getProducts(){
        $productos = Disoensadores::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','disoensadores.idProdutoDispen_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/cocina/disoensadores')->with('productos',$productos);
    }


    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Disoensadores::
        join('producto','producto.idProducto','=','disoensadores.idProdutoDispen_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Disoensadores::imagenes($id);

        return view('disoensador')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
