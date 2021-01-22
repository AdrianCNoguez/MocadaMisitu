<?php

namespace App\Http\Controllers;
use App\Lamparas;
use Illuminate\Http\Request;
use DB;


class LamparasController extends Controller
{

    /*
    public function getProducts(){
        $productos = lamparas::
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            
            ->join('producto','producto.idProducto','=','lamparas.idProductoLamp_fk' )          
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->where('proteccion', '=', 'IP66' )
            ->get()->groupBy('idProducto');
            return view('iluminacionExterior.lamparas')->with('productos',$productos);
    }

    public function all(Request $request){
        $productos = DB::table('lamparas')->select('producto.nombre','lamparas.proteccion')
        ->join('producto','producto.idProducto','=','lamparas.idProductoLamp_fk')
        ->where('proteccion', '=', 'IP66' )
        ->get();
        return view('iluminacionExterior.lamparasExt')->with('productos',$productos);
    }
    */

    
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

public function viewProduct($id){

    $position =  strpos($id, '-s');
    $id = substr($id, $position + 2);

    $product = Lamparas::
    join('producto','producto.idProducto','=','Lamparas.idProductoLamp_fk')
    ->where('producto.idProducto','=', $id)->first();

    $imagenes = Lamparas::imagenes($id);

    return view('lamparas')->with(compact('product', $product))->with(compact('imagenes',$imagenes));

}


}
    