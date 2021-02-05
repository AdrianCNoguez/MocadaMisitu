<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soquets extends Model
{
    protected $table = 'soquets';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }
}
