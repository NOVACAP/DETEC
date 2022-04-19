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
//        Schema::table('processes', function (Blueprint $table) {
//            $table->foreignId('process_section_id')->nullable()->constrained('process_sections');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('processes', function (Blueprint $table) {
//            $table->dropForeign('processes_process_section_id_foreign'); //[table]_[column]_foreign
//            $table->dropColumn('process_section_id');
//        });
    }
};
