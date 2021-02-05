<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aros;
class AroController extends Controller
{
    //
    public function getProducts(){
        $productos = Aros::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','aros.idProducto')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('aros.aros')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Aros::
        join('producto','producto.idProducto','=','aros.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Aros::imagenes($id);

        return view('aros.aro')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
    

}
