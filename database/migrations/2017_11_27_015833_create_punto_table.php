<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
       {
           Schema::create('punto',function(Blueprint $table){
             $table->increments('idpunto');
             $table->decimal('costofijo',10,2);
             $table->decimal('costototal',10,2);
             $table->decimal('costovariable',10,2);
             $table->decimal('cantidad',10,2);
             $table->decimal('precioventa',10,2);
             $table->decimal('iventa',10,2);
             $table->decimal('pq',10,2);
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
           Schema::drop('punto');
       }
}
