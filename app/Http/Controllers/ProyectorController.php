<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Proyectores;

class ProyectorController extends Controller
{
    public function getProducts(){
        $productos = Proyectores::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Proyectores.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('proyectores.proyectores')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Proyectores::
        join('producto','producto.idProducto','=','Proyectores.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Proyectores::imagenes($id);

        return view('proyectores.proyector')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
