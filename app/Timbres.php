<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timbres extends Model
{
    protected $table = 'timbres';
    protected $primaryKey='idTimbre';

    public function productos()
    {
        return $this->belongsTo('App\Productos', 'idProdutoTimbre_fk');
    }
}
