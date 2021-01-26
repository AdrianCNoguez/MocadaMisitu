<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
class SeriesController extends Controller
{
    //
    public function getProducts(){
        $productos = Series::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','series.idProductoSerie_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('series.series')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Series::
        join('producto','producto.idProducto','=','series.idProductoSerie_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Series::imagenes($id);


        return view('series.serie')->with(compact('product', $product))->with(compact('imagenes',$imagenes));


    }
}
