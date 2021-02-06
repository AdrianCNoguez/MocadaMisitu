<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Reflectores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Productos;

class ReflectoresController extends Controller
{
    public function getProducts(){
        $productos = reflectores::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','reflectores.idProducto')          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('reflectores.reflectores')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Reflectores::
        join('producto','producto.idProducto','=','reflectores.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Reflectores::imagenes($id);

        return view('reflectores.reflector')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }

}