<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Humificadores;
class HumificadoresController extends Controller
{
    //difusores
    public function getProducts(){
        $productos = Humificadores::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Humidificadores.idProductoHumi_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('humificadores.humificadores')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Humificadores::
        join('producto','producto.idProducto','=','Humidificadores.idProductoHumi_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Humificadores::imagenes($id);

        return view('humificadores.humificador')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
