<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacas extends Model
{
    protected $table = 'estacas';
    protected $primaryKey='idEstaca';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
