<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espejo extends Model
{
    //
    protected $table = 'espejo';
    protected $primaryKey='idEspejo';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
