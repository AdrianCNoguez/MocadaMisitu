<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventiladores extends Model
{
    protected $table = 'ventiladores';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
