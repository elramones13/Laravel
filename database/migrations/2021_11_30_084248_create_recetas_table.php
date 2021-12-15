<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
class CreateRecetasTable extends Migration
{
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('descripcion',100);
            $table->string('precio',10);
            $table->string('calorias', 10)->nullable();
            $table->date('f_alta');
            $table->softDeletes();
            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
}