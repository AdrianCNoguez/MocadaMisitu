<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    public function traerProductos(){
        $producto = Productos::all();
        return view("welcome",array("producto" => $producto));
    }
}
