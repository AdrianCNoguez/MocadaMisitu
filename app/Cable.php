<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cable extends Model
{
    //
    protected $table ='cable';
    protected $primaryKey='idCable';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
