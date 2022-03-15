<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('section_processes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('sections_id')->constrained();
            //$table->foreign('sections_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignId('processes_id')->constrained();
            //$table->foreign('processes_id')->references('id')->on('processes')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_processes');
    }
};
