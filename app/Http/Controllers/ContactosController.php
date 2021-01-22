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
            return view('/componentesElectricos.contactos')->with('productos',$productos);
    }
}
