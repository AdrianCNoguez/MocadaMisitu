<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Faroles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Productos;


class FarolesController extends Controller
{
    public function getProducts(){
        $productos = faroles::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','faroles.idProducto')          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('faroles.faroles')->with('productos',$productos);
    }

    
    public function viewProducts($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = faroles::
        join('producto','producto.idProducto','=','faroles.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = faroles::imagenes($id);

        return view('faroles.farol')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }

}