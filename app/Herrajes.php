<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herrajes extends Model
{
    //
    protected $table ='herrajes';
    protected $primaryKey='idHerraje';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
