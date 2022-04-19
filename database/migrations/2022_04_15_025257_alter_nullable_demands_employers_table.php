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
//        Schema::table('demands_employers', function (Blueprint $table) {
//            $table->unsignedBigInteger('employer_id')->nullable()->change();
//            $table->unsignedBigInteger('demand_id')->nullable()->change();
//
//            $table->dropForeign(['employer_id', 'demand_id']);
//
//            $table->foreign('employer_id')
//                ->references('id')
//                ->on('employers')
//                ->nullOnDelete();
//
//            $table->foreign('demand_id')
//                ->references('id')
//                ->on('demands')
//                ->nullOnDelete();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('demands_employers', function (Blueprint $table) {
//            $table->unsignedBigInteger('employer_id')->change();
//            $table->unsignedBigInteger('demand_id')->change();
//        });
    }
};
