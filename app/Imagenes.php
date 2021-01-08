<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    protected $table = 'imagenes';
    protected $primaryKey='idImagen';

    public function productos(){
        return $this->belongsTo('App\Productos','idProductoImagen_fk');
    }
}
