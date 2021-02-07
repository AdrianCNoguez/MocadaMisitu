<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Accesorios;
use App\Productos;

class AccesoriosController extends Controller
{
    public function getProducts(){
        $productos = accesorios::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','accesorios.idProducto')          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('accesorios.accesorios')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = accesorios::
        join('producto','producto.idProducto','=','accesorios.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = accesorios::imagenes($id);

        return view('accesorios.accesorio')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }

}
