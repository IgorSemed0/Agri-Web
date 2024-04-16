<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosSensoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_sensores', function (Blueprint $table) {
            $table->id();
            $table->decimal('soilHumidity', 8, 2);
            $table->decimal('soilTemperature', 8, 2);
            $table->unsignedInteger('soilConductivity');
            $table->decimal('soilPH', 8, 2);
            $table->unsignedInteger('nitrogen');
            $table->unsignedInteger('phosphorus');
            $table->unsignedInteger('potassium');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_sensores');
    }
}
