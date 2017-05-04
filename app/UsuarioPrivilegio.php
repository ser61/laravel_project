<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioPrivilegio extends Model
{
    protected $table = 'usuarioprivilegio';

  public function scope_getP($query,$id)
  {
    $datos = $query->select('idPrivilegio')->where('idUsuario',$id);
    return $datos;
  }
}
