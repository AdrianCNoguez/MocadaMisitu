<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\TiraLed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class TiraLedController extends Controller
{
    public function getProducts(){
        $productos = TiraLed::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','tiraled.idProdTira_fk')          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('tirasLed.tirasLed')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = TiraLed::
        join('producto','producto.idProducto','=','tiraled.idProdTira_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = TiraLed::imagenes($id);


        return view('tirasLed.tiraLed')->with(compact('product', $product))->with(compact('imagenes',$imagenes));


    }
}
