<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Consolas;
class ConsolasController extends Controller
{
    //entretenimiento
    public function getProducts(){
        $productos = Consolas::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Consolas.idProductoConsola_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/entretenimiento/consolas')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Consolas::
        join('producto','producto.idProducto','=','Consolas.idProductoConsola_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Consolas::imagenes($id);

        return view('consola')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
