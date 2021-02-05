<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventiladores;

class VentiladoresController extends Controller
{
    public function getProducts(){
        $productos = Ventiladores::select('producto.idProducto','producto.nombre','producto.descripcion','imagenes.ruta')
        ->join('producto','producto.idProducto','=','ventiladores.idProducto')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->get()->groupBy('idProducto');
        return view('ventiladores.ventiladores')->with('productos',$productos);
    }

    public function viewProduct($id)
    {
        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Ventiladores::
        join('producto','producto.idProducto','=','ventiladores.idProducto')
        ->where('producto.idProducto','=', $id)->first();
        

        $imagenes = Ventiladores::imagenes($id);

        return view('ventiladores.ventilador')->with(compact('product', $product))->with(compact('imagenes',$imagenes));
    }
}
