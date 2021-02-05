<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectores extends Model
{
    protected $table = 'proyectores';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }

}
