<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('razon', function (Blueprint $table) {
              $table->increments('idrazon');
              $table->decimal('activocorriente',5,2);
              $table->decimal('pasivocorriente',5,2);
              $table->decimal('inventario',5,2);
              $table->decimal('activototal',5,2);
              $table->decimal('deudatotal',5,2);
              $table->decimal('venta',5,2);
              $table->decimal('cuentapcobrar',5,2);
              $table->decimal('activofijo',5,2);
              $table->decimal('liquidez',5,2);
              $table->decimal('pruebaacida',5,2);
              $table->decimal('endeudamiento',5,2);
              $table->decimal('rotacion',5,2);
              $table->decimal('diaspc',5,2);
              $table->decimal('raf',5,2);
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
