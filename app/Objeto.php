<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    public $timestamps = false;


    /**
     * Establece relación hacia muchas incidencias
     * @return type
     */
    public function incidencias()
    {
      return $this->hasMany('App\Incidencia');
    }
}
