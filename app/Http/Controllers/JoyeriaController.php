<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Joyeria;

class JoyeriaController extends Controller
{

    public function getProducts(){
        $productos = Joyeria::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','joyeria.idProductoJoyeria_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('joyeria.joyas')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Joyeria::
        join('producto','producto.idProducto','=','joyeria.idProductoJoyeria_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Joyeria::imagenes($id);

        return view('joyeria.joya')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}

