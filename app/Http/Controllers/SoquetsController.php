<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Soquets;
class SoquetsController extends Controller
{
    //
    public function getProducts(){
        $productos = Soquets::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Soquets.idProductoSoquet_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/componentesElectricos/soquets')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Soquets::
        join('producto','producto.idProducto','=','Soquets.idProductoSoquet_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Soquets::imagenes($id);

        return view('soquet')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
