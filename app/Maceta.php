<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maceta extends Model
{
    //
    protected $table = 'maceta';
    protected $primaryKey='idMaceta';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
