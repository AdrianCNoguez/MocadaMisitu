<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reflectores extends Model
{
    protected $table = 'reflectores';
    protected $primaryKey='idReflector';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }

}
