<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LamparaEscritorios extends Model
{
    //
    protected $table = 'lamparasescritorio';
    protected $primaryKey='idLamparaEscritorio';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
