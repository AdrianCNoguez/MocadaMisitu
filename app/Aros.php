<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aros extends Model
{
    protected $table ='aros';
    protected $primaryKey='idAro';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }
}
