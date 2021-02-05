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

}
