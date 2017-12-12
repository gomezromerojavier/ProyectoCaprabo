<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable =
    ['desc_producto', 'imagen_producto', 'precio_producto','id_subtipo'];

    public $timestamps = false;

    public function subtipo(){
        return $this->belongsTo(\App\Subtipo::Class, 'id_subtipo');
    }
}
