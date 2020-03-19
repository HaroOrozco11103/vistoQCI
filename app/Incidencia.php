<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
  public $timestamps = false;
  protected $dates = ['fechaIncidente', 'fechaResuelto'];

  /**
   * Establece relación hacia un objeto encontrado
   * @return type
   */
  public function objeto()
  {
      return $this->belongsTo(Objeto::class);
  }
}
