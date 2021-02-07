<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Productos;
use DB;

class ProductosController extends Controller
{

    public function getProducts(){
        $produc = Productos:: 
            select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->get()->groupBy('idProducto');
            return view('welcome')->with('produc',$produc);
    }


    public function getViewProducts(){
        
        $produc = Productos:: 
        select('producto.idProducto','producto.nombre','imagenes.ruta')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->orderBy('idProducto', 'asc')
        ->get()->groupBy('idProducto');
        //DB::select( $produc)->paginate(25);
        //$produc = Productos::paginate(10);
      
       
        return view('productos.productos')->with('produc',$produc);
    }

    public function viewProduct($id){

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3); 

        $produc = Productos::
        join('producto','producto.idProducto','=','producto.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Productos::imagenes($id);
 
        return view('productos.producto')->with(compact('product', $produc))->with(compact('imagenes',$imagenes));

    }



    
}
