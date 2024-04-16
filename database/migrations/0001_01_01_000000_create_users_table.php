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
        schema::create('users', function(Blueprint $table){
            $table->id();
            $table->string('vc_firstName');
            $table->string('vc_lastName');
            $table->string('name');
            $table->string('vc_gender');
            $table->string('vc_profile');
            $table->string('vc_image');
            $table->string('email');
            $table->string('password');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
