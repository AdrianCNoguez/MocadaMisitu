<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faroles extends Model
{
    protected $table = 'faroles';
    protected $primaryKey='idFarol';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }


}
