<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extenciones extends Model
{
    //extenciones
    protected $table = 'extenciones';

    protected $primaryKey='idExtencion';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }
}
