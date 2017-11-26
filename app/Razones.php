<?php

namespace SoftwareFinanciero;

use Illuminate\Database\Eloquent\Model;

class Razones extends Model
{
    //
    protected $table ='razon';
    protected $primaryKey ='idrazon';
    protected $fillable = [
      'activocorriente',
      'pasivocorriente',
      'inventario',
      'activototal',
      'deudatotal',
      'venta',
      'cuentapcobrar',
      'activofijo',
      'liquidez',
      'pruebaacida',
      'endeudamiento',
      'rotacion',
      'diaspc',
      'raf',
      'rat'
    ];
    public $timestamps = false;
  }
