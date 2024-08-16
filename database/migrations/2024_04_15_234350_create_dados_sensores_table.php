<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosSensoresTable extends Migration
{
    public function up()
    {
        Schema::create('dados_sensores', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('soilHumidity')->nullable();
            $table->unsignedInteger('soilTemperature')->nullable();
            $table->unsignedInteger('airHumidity')->nullable();
            $table->unsignedInteger('airTemperature')->nullable();
            $table->unsignedInteger('soilConductivity')->nullable();
            $table->unsignedInteger('soilPH')->nullable();
            $table->unsignedInteger('nitrogen')->nullable();
            $table->unsignedInteger('phosphorus')->nullable();
            $table->unsignedInteger('potassium')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dados_sensores');
    }
}
