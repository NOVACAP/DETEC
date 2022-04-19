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
        Schema::create('demands_employers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->constrained('employers', 'id');
            $table->foreignId('demand_id')->constrained('demands', 'id');
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


        Schema::dropIfExists('demands_employers');
    }
};
