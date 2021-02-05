<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Estacas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Productos;

class EstacasController extends Controller
{
    public function getProducts(){
        $productos = Estacas::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','estacas.idProducto')          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('jardin.estacas')->with('productos',$productos);
    }

    public function viewProducts($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Estacas::
        join('producto','producto.idProducto','=','estacas.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Estacas::imagenes($id);

        return view('jardin.estaca')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
