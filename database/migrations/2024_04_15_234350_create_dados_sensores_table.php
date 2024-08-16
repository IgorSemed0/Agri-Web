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
            $table->decimal('soilHumidity', 8, 2)->nullable();
            $table->decimal('soilTemperature', 8, 2)->nullable();
            $table->decimal('airHumidity', 8, 2)->nullable();
            $table->decimal('airTemperature', 8, 2)->nullable();
            $table->decimal('soilConductivity')->nullable();
            $table->decimal('soilPH', 8, 2)->nullable();
            $table->decimal('nitrogen')->nullable();
            $table->decimal('phosphorus')->nullable();
            $table->decimal('potassium')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dados_sensores');
    }
}
