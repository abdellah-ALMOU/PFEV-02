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
        Schema::create('reactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->text('content');

            $table->unsignedBigInteger('intervenant_id');
            $table->foreign('intervenant_id')->references('id')->on('intervenants');

            $table->unsignedBigInteger('incident_id');
            $table->foreign('incident_id')->references('id')->on('incidents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reaction');
    }
};
