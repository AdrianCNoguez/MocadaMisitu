<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MangueraLeds extends Model
{
    //
    protected $table = 'mangueraleds';
    protected $primaryKey='idManguera';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
