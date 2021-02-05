<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cables extends Model
{
    //
    protected $table ='cables';
    protected $primaryKey='idCable';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }
}
