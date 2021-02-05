<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imagenes;
use App\Productos;
use App\Ventiladores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class SearchController extends Controller
{

    public function productos(Request $request){
        $term = $request->get('term');
        $querys = Productos::where('nombre','LIKE','%'. $term .'%')->get();
        
        $data = [];

        foreach( $querys as $query ){
            $data[] = [
                'label' => $query->nombre
            ];
        }

        return $data;
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
