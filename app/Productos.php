<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'producto';
    protected $primaryKey='idProducto';
   
    public function timbres()
    {
        return $this->hasOne('App\Timbres', 'idProdutoTimbre_fk');
    }

    public function imagenes()
    {
        
        return $this->hasMany('App\Imagenes','idProductoImagen_fk');
    }

    public static function imagenesP($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();
        return $imagenes;
    }
}
