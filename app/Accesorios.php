<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesorios extends Model
{
    protected $table ='accesorios';
    protected $primaryKey='idAccesorio';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }
}
