<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ventiladores;

class VentiladoresController extends Controller
{
    public function getProducts(){
        $productos = Ventiladores::select('producto.idProducto','producto.nombre','producto.descripcion','imagenes.ruta')
        ->join('producto','producto.idProducto','=','ventiladores.idProductoVentilador_fk')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->get()->groupBy('idProducto');
        return view('ventiladores')->with('productos',$productos);;
    }
}
