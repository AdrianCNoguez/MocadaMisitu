<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lamparas;
use DB;
class LamparasController extends Controller
{
    
/*---------------------Lamparas_techo-------------------------------------- */
       /* public function getProducts(){
            $productos = Lamparas::
                select('producto.idProducto','producto.nombre','imagenes.ruta')
                ->join('producto','producto.idProducto','=','Lamparas.idProductoLamp_fk')
                ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
                ->where('TipoMontaje', '=', 'Techo')
                ->get()->groupBy('idProducto');
               return view('/iluminacionInterior.lamparas')->with('productos',$productos);
        }*/
/*--------------------------Lampara_techo_or_bannio------------------------------- */
/*
public function getProducts(){
            $productos = Lamparas::
                select('producto.idProducto','producto.nombre','imagenes.ruta')
                ->join('producto','producto.idProducto','=','Lamparas.idProductoLamp_fk')
                ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
                ->where('TipoMontaje', '=', 'Techo')
                ->orWhere('TipoMontaje', '=', 'Techo/baño' )
                ->get()->groupBy('idProducto');
               return view('/iluminacionInterior.lamparas')->with('productos',$productos);
        }

*/

/*-------------------------'pared','Pared','N/A'------------------------------- */
public function getProducts(){
    $productos = Lamparas::
        select('producto.idProducto','producto.nombre','imagenes.ruta')
        ->join('producto','producto.idProducto','=','Lamparas.idProductoLamp_fk')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->where('TipoMontaje', '=', 'pared')
        ->orWhere('TipoMontaje', '=', 'Pared' )
        ->orWhere('TipoMontaje', '=', 'N/A')
        ->get()->groupBy('idProducto');
       return view('/iluminacionInterior.lamparas')->with('productos',$productos);
}



}
