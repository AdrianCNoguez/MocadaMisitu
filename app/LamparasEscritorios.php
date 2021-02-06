<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LamparasEscritorios extends Model
{
    //
    protected $table = 'lamparasescritorios';
    protected $primaryKey='idLamparaEscritorio';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }
}
