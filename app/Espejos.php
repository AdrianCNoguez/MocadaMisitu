<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espejos extends Model
{
    //
    protected $table = 'espejos';
    protected $primaryKey='idEspejo';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
