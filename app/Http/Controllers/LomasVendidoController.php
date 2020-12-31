<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\LomasVendido;


class LomasVendidoController extends Controller
{
    public function getProducts(){
       /*  $productos=LomasVendido::
        select('producto.idProducto','producto.nombre','imagenes.ruta')
        ->join('producto','producto.idProducto','=','lomasvendido.idProducto')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->groupByRaw('city, state')
        ->get();
        return view('welcome')->with('productos',$productos); */

        $vendidos = DB::table('lomasvendido as A')
                   ->select('A.idProducto_fk')
                   ->groupBy('idProducto_fk');

        $producto = DB::table('producto')
                    ->joinSub($vendidos, 'vendidos', function ($join) {
                        $join->on('producto.idProducto', '=', 'vendidos.idProducto_fk');
                    });

         $productos = DB::table('imagenes')
                    ->joinSub($producto, 'producto', function ($join) {
                        $join->on('imagenes.idProductoImagen_fk', '=', 'producto.idProducto');
                    })->get();
                return view('welcome')->with('productos',$productos);
    }
}
