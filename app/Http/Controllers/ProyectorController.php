<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Proyector;

class ProyectorController extends Controller
{
    //
    public function getProducts(){
        $productos = Proyector::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Proyector.idProductoProyector_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('proyectores.proyectores')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Proyector::
        join('producto','producto.idProducto','=','Proyector.idProductoProyector_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Proyector::imagenes($id);

        return view('proyectores.proyector')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
