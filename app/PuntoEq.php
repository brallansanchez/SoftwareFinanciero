<?php

namespace SoftwareFinanciero;

use Illuminate\Database\Eloquent\Model;

class PuntoEq extends Model
{
    //
    protected $table = 'punto';
    protected $primaryKey= 'idpunto';
    protected $fillable = [
      'costototal',
      'costovariable',
      'costofijo',
      'cantidad',
      'precioventa',
      'iventa',
      'pq',
    ];
    public $timestamps = false;
}
