<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timbres extends Model
{
    protected $table = 'timbres';
    protected $primaryKey='idTimbre';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
