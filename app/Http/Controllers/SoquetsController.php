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
            return view('soquets.soquets')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $product = Soquets::
        join('producto','producto.idProducto','=','Soquets.idProductoSoquet_fk')
        ->join('tiporosca','tiporosca.idRosca','=','Soquets.tipoRoscaSoquet_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Soquets::imagenes($id);

        return view('soquets.soquet')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
