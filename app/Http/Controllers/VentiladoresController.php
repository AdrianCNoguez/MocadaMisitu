<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventiladores;

class VentiladoresController extends Controller
{
    public function getProducts(){
        $productos = Ventiladores::select('producto.idProducto','producto.nombre','producto.descripcion','imagenes.ruta')
        ->join('producto','producto.idProducto','=','ventiladores.idProductoVentilador_fk')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->get()->groupBy('idProducto');
        return view('ventiladores')->with('productos',$productos);;
    }

    public function viewProduct($id)
    {
        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Ventiladores::
        join('producto','producto.idProducto','=','ventiladores.idProductoVentilador_fk')
        ->where('producto.idProducto','=', $id)->first();
        

        $imagenes = Ventiladores::imagenes($id);

        return view('ventilador')->with(compact('product', $product))->with(compact('imagenes',$imagenes));
    }
}
