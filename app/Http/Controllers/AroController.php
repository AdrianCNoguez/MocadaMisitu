<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aro;
class AroController extends Controller
{
    //
    public function getProducts(){
        $productos = Aro::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','aro.idProductoAro_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('aros.aros')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Aro::
        join('producto','producto.idProducto','=','aro.idProductoAro_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Aro::imagenes($id);

        return view('aros.aro')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
    

}
