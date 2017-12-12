<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtipo extends Model
{
    protected $table = 'subtipos';
    protected $primaryKey = 'id_subtipo';
    protected $fillable =
    ['desc_subtipo','id_tipo'];

    public $timestamps = false;

    public function productos(){
            return $this->hasMany(\App\Producto::class, 'id_subtipo');
    }
    public function tipo(){
            return $this->belongsTo(\App\Tipo::class, 'id_tipo');
    }
}
