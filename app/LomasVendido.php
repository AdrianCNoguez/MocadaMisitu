<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LomasVendido extends Model
{
    protected $table = 'lomasvendido';
    protected $primaryKey='id';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}

