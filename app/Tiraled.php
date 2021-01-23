<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiraLed extends Model
{

    protected $table = 'tiraled';
    protected $primaryKey='idTiraLEd';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
    
}
