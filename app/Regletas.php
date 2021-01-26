<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regletas extends Model
{
    //
    protected $table = 'regletas';
    protected $primaryKey='idRegletas';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
