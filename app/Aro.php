<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aro extends Model
{
    protected $table ='aro';
    protected $primaryKey='idAro';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
