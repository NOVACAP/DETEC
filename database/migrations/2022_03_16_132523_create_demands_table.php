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
            $table->foreignId('activity_id')->constrained('activities')->onDelete('cascade');
            $table->foreignId('interested_id')->constrained('interesteds')->onDelete('cascade');
            $table->foreignId('technique_area_id')->constrained('technique_areas')->onDelete('cascade');
            $table->foreignId('thematic_areas_id')->constrained('thematic_areas')->onDelete('cascade');
            $table->foreignId('administrative_region_id')->constrained('administrative_regions')->onDelete('cascade');
            $table->foreignId('process_id')->constrained('processes')->onDelete('cascade');
            $table->foreignId('demands_employer_id')->nullable('demands_employers')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('demands');
    }
};
