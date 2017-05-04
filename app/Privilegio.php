<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
  protected $table = 'privilegio';
  protected $fillable = ['nombre', 'permiso'];
  
  public function scope_getPrivilegios($query)
  {
    $privilegio = $query->select('id', 'nombre');
    return $privilegio;
  }
}
