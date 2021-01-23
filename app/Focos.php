<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Focos extends Model
{
    //
    protected $table = 'focos';
    protected $primaryKey='idFoco';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
