<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despachadores extends Model
{
    //
    protected $table ='despachador';
    protected $primaryKey='idDespachador';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }

}
