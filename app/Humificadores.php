<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humificadores extends Model
{
    //
    protected $table ='humificadores';
    protected $primaryKey='idHumidificador';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }

}
