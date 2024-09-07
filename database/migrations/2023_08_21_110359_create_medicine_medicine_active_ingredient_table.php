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
        Schema::create('medicine_medicine_active_ingredient', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medicine_id');
            $table->unsignedBigInteger('medicine_active_ingredient_id');

            // $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
            // $table->foreign('medicine_active_ingredient_id')->references('id')->on('medicine_active_ingredients')->onDelete('cascade');
          
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
        Schema::dropIfExists('medicine_medicine_active_ingredient');
    }
};
