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
              $table->decimal('activocorriente',10,2);
              $table->decimal('pasivocorriente',10,2);
              $table->decimal('inventario',10,2);
              $table->decimal('activototal',10,2);
              $table->decimal('deudatotal',10,2);
              $table->decimal('venta',10,2);
              $table->decimal('cuentapcobrar',10,2);
              $table->decimal('activofijo',10,2);
              $table->decimal('liquidez',10,2);
              $table->decimal('pruebaacida',10,2);
              $table->decimal('endeudamiento',10,2);
              $table->decimal('rotacion',10,2);
              $table->decimal('diaspc',10,2);
              $table->decimal('raf',10,2);
              $table->decimal('rat',10,2);
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
