<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contactos;
class ContactosController extends Controller
{
    //
    public function getProducts(){
        $productos = Contactos::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('producto','producto.idProducto','=','Contactos.idProductoContac_fk')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('/componentesElectricos/contactos')->with('productos',$productos);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-s');
        $id = substr($id, $position + 2);

        $product = Contactos::
        join('producto','producto.idProducto','=','Contactos.idProductoContac_fk')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Contactos::imagenes($id);

        return view('contacto')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

    }
}
