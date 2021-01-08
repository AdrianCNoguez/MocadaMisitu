<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timbres;

class TimbresController extends Controller
{
    public function getProducts(){
        $productos = Timbres::select('producto.idProducto','producto.nombre','producto.descripcion','imagenes.ruta')
        ->join('producto','producto.idProducto','=','timbres.idProdutoTimbre_fk')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->get()->groupBy('idProducto');
        return view('timbres')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);
        $product = Timbres::select('producto.idProducto','producto.nombre','producto.descripcion')
        ->join('producto','producto.idProducto','=','timbres.idProdutoTimbre_fk')
        ->where('producto.idProducto','=', $id)->get();


        //$ib = Timbres::find(1)->productos->imagenes;

        // $imagenes = Bicicletas::find(3)->imagenesbicicletas;

        return view('prueba')->with('product',$product);


        /* return view('prueba')->with('product',$product); */


    }
}
