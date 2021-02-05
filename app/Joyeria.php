<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joyeria extends Model
{
    protected $table = 'joyeria';
    protected $primaryKey='idJoyeria';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }

}
