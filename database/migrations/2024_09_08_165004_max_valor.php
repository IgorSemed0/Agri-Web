<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('maxvalor', function (Blueprint $table) {
            $table->id();
           $table->decimal('soilTemperature', 8, 2);
            $table->decimal('airlHumidity', 8, 2);
            $table->decimal('airTemperature', 8, 2);
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
        Schema::dropIfExists('maxvalor');
    }
};
