<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyector extends Model
{
    protected $table = 'proyector';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }

}
