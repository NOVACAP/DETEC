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
        Schema::create('demands', function (Blueprint $table) {
            $table->id();
            $table->date('date_input_demand');
            $table->date('date_distribution_demand')->nullable();
            $table->date('delivery_demand')->nullable();
            $table->string('address_demand' , 100);

            //foreign
            $table->foreignId('activity_id')->constrained()->onDelete('cascade');
            $table->foreignId('interested_id')->constrained()->onDelete('cascade');
            $table->foreignId('technique_area_id')->constrained()->onDelete('cascade');
            $table->foreignId('thematic_areas_id')->constrained()->onDelete('cascade');
            $table->foreignId('administrative_region_id')->constrained()->onDelete('cascade');
            $table->foreignId('process_id')->constrained()->onDelete('cascade');
            $table->foreignId('demands_employer_id')->nullable()->constrained()->onDelete('cascade');

            $table->timestamps();
        });

            //add demands_id for demands_employer

            Schema::table('demands_employers', function (Blueprint $table) {

                $table->foreignId('demand_id')->nullable()->constrained()->onDelete('cascade');
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

        Schema::dropIfExists('demands');
    }
};
