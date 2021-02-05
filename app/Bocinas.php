<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bocinas extends Model
{
    protected $table = 'bocinas';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}