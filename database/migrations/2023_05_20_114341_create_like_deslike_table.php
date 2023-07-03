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
        Schema::create('likesDeslikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('like');
            $table->string('deslike');

            $table->unsignedBigInteger('citoyene_id');
            $table->foreign('citoyene_id')->references('id')->on('citoyenes');

            $table->unsignedBigInteger('reaction_id');
            $table->foreign('reaction_id')->references('id')->on('reactions');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_deslike');
    }
};
