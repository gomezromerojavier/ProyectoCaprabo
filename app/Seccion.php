<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
  protected $table = 'secciones';
  protected $primaryKey = 'id_seccion';
  protected $fillable =
  ['desc_seccion'];

  public $timestamps = false;

  public function tipos(){
    return $this->hasMany(\App\Tipo::class, 'id_seccion');
  }

}
