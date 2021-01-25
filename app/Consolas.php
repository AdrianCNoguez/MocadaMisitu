<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consolas extends Model
{
    //consolas
    protected $table ='consolas';
    protected $primaryKey='idConsola';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
