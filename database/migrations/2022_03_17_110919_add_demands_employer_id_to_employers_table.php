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
        // Schema::table('employers', function (Blueprint $table) {
        // //    $table ->foreignId('demands_employer_id')->nullable();

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('employers', function (Blueprint $table) {
        //     // $table->dropForeign('employers_demands_employer_id_foreign'); //[table]_[column]_foreign
        //     // $table->dropColumn('demands_employer_id');
            
        // });
    }
};