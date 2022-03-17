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
        Schema::table('demands_employers', function (Blueprint $table) {
            $table->foreignId('demand_id')->nullable()->constrained('demands')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demands_employers', function (Blueprint $table) {
            $table->dropForeign('demands_employers_demand_id_foreign'); //[table]_[column]_foreign
            $table->dropColumn('demand_id');
        });
    }
};
