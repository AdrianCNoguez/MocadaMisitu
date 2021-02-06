<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ModelosController extends Controller
{
    public static function obtenerModelos(){
        $path = $_SERVER["DOCUMENT_ROOT"].'/MONCADAMISITU/app';
        $modelos = [];

        $dir = opendir($path);

        while ($elemento = readdir($dir)){
            if( $elemento != "." && $elemento != ".."){
                if( is_dir($path.$elemento) ){
                    echo "<p><strong>CARPETA: ". $elemento ."</strong></p>";
                } else {
                    if ($elemento != 'Console' && $elemento != 'Exceptions' && $elemento != 'Http' &&
                        $elemento != 'Imagenes.php' && $elemento != 'LomasVendido.php' && $elemento != 'Productos.php'
                        && $elemento != 'Providers' && $elemento != 'User.php') {
                            array_push($modelos, strtolower(str_replace(".php", "", $elemento)));
                    }
                    
                   
                }
            }
        }


        return $modelos;
    }


    public static function limpiarPeticion($articulo){
        $caracteres = ['|','or','select','update','delete','xor','&&','*','?','and','not','some','truncate',];
        $clean = filter_var($articulo, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $flag = 'success';

        $clean = trim($clean);
        if ($clean === '') {
            $flag = 'error';
            return $flag;
        }

        $explode = explode(" ", $clean);
        
        foreach ($explode as $value) {
            foreach ($caracteres as $caracter) {
                if($value === $caracter){
                    $flag = 'error';
                    break 2;
                }
            }
        }

        return $clean;
    }

    
}
