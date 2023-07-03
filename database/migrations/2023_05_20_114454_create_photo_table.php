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
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('path');

            
            $table->unsignedBigInteger('incident_id')->nullable();
            $table->foreign('incident_id')->references('id')->on('incidents');

            $table->unsignedBigInteger('reaction_id')->nullable();
            $table->foreign('reaction_id')->references('id')->on('reactions');

            $table->timestamps();
        }); 
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo');
    }
};
