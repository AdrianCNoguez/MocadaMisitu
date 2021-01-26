<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispensadores extends Model
{
    //
    protected $table ='disoensadores';
    protected $primaryKey='idDispensador';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }

}
