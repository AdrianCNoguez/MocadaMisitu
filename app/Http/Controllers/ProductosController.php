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

/*
    public function getViewProducts(){
        
        $produc = Productos:: 
        select('producto.idProducto','producto.nombre','imagenes.ruta')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->orderBy('idProducto', 'asc')
        ->get()->groupBy('idProducto');
        DB::select( $produc)->paginate(25);
        //$produc = Productos::paginate(10);
       
        return view('productos.productos')->with('produc',$produc);
    }*/



/*  
    public function viewProduct($id){
        
      

        $position =  strpos($id, '-xs');
        $id = substr($id, $position + 3);

        $produc = Productos::
        select('producto.idProducto')
        ->where('producto.idProducto','=', $id)->first();

        $imagenes = Productos::imagenesP($id);

        return view('productos.producto')->with(compact('produc', $produc))->with(compact('imagenes',$imagenes));

    }
*/

        public function getViewProducts(){
                
            $raw_query = \DB::connection('mysql')->table('producto')
            ->select('producto.idProducto','producto.nombre','imagenes.ruta')
            ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
            ->orderBy('idProducto', 'asc')
            ->get()->groupBy('idProducto');
        $totalCount = $raw_query->count();

        $page = $request->input('page') ?:1;
        if ($page) {
            $skip = 10 * ($page - 1);
            $raw_query = $raw_query->take(10)->skip($skip);
        } else {
            $raw_query = $raw_query->take(10)->skip(0);
        }

        $parameters = $request->getQueryString();
        $parameters = preg_replace('/&page(=[^&]*)?|^page(=[^&]*)?&?/','', $parameters);
        $path = url('/') . '/productos?' . $parameters;

        $categories = $raw_query->get()->toArray();

        $paginator = new \Illuminate\Pagination\LengthAwarePaginator($produc, $totalCount, 10, $page);
        $paginator = $paginator->withPath($path);
        }
    
}
