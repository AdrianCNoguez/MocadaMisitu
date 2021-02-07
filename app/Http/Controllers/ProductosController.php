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
        $modelos = ModelosController::obtenerModelos();
        $produc = Productos:: 
        select('producto.idProducto','producto.nombre','imagenes.ruta')
        ->join('imagenes','imagenes.idProductoImagen_fk','=','producto.idProducto')
        ->get()->groupBy('idProducto');
        return view('productos.productos')->with('produc',$produc);
    }

    public function searchProduct(Request $request){
        $modelos = ModelosController::obtenerModelos();
        $collection = collect();
        $articulo = $request->get('product');

        $articulo = ModelosController::limpiarPeticion($articulo);

        if ($articulo == 'error') {
            return redirect()->back();
        }else{
            
            for( $i = 0; $i < count($modelos) ; $i++ ) { 

                $productos = DB::table($modelos[$i])
                ->join('producto','producto.idProducto','=', $modelos[$i].'.idProducto')
                ->where('producto.nombre','LIKE','%'. $articulo .'%')->get();
                    
                    if (!$productos->isEmpty()) {
                        foreach ($productos as $producto) {
                            $imagenes = Imagenes::where('idProductoImagen_fk',$producto->idProducto)->first();
                            $producto->imagen = !is_null($imagenes) ? $imagenes->ruta: null;
                            $collection->push($producto);
                        }
                    }
                } 
        }
        
        return view('search')->with(compact('collection', $collection)); 
    } 
    

    
}
