<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lamparas extends Model
{
    //
    protected $table ='lamparas';
    protected $primaryKey='idLampara';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
