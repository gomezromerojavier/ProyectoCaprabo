<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';
    protected $primaryKey = 'id_tipo';
    protected $fillable =
    ['desc_tipo', 'id_seccion'];

    public $timestamps = false;

    public function subtipos(){
      return $this->hasMany(\App\Subtipo::class, 'id_tipo');
    }

    public function seccion(){
      return $this->belongsTo(\App\Seccion::class ,'id_seccion');
    }
}
