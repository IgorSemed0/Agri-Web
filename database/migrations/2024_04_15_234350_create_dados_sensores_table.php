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
            $table->decimal('soilHumidity', 8, 2);
            $table->decimal('soilTemperature', 8, 2);
            $table->decimal('airHumidity', 8, 2);
            $table->decimal('airTemperature', 8, 2);
            $table->unsignedInteger('soilConductivity');
            $table->decimal('soilPH', 8, 2);
            $table->unsignedInteger('nitrogen');
            $table->unsignedInteger('phosphorus');
            $table->unsignedInteger('potassium');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dados_sensores');
    }
}
