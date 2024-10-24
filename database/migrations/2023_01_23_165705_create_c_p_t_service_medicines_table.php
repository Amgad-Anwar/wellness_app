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
        Schema::create('cpt_service_medicines', function (Blueprint $table) {
            $table->id();
            $table->integer('cpt_service_id')->default(0);
            $table->integer('medicine_id')->default(0);
            $table->integer('min_day')->default(0);
            $table->integer('max_day')->default(0);
            $table->integer('min_quantity')->default(0);
            $table->integer('max_quantity')->default(0);
            $table->integer('min_daily_dose')->default(0);
            $table->integer('max_daily_dose')->default(0);
            $table->integer('updated_by')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('deleted_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpt_service_medicines');
    }
};
