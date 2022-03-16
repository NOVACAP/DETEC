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
            
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->foreignId('process_id')->constrained()->onDelete('cascade');
        });

        Schema::table('processes', function (Blueprint $table) {

            $table->foreignId('section_process_id')->nullable()->constrained()->onDelete('cascade');
           
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::table('processes', function (Blueprint $table) {
            $table->dropForeign('processes_section_process_id_foreign'); //[table]_[column]_foreign
            $table->dropColumn('section_process_id');
        });
       
        Schema::dropIfExists('section_processes');
    }
};
