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
        Schema::create('medicines_data', function (Blueprint $table) {
            $table->comment('');
            $table->string('med_id', 13)->nullable();
            $table->string('name', 40)->nullable();
            $table->string('article_description', 40)->nullable();
            $table->string('use', 40)->nullable();
            $table->string('company', 40)->nullable();
            $table->string('discount_status_type', 14)->nullable();
            $table->string('origin_status', 18)->nullable();
            $table->string('created', 10)->nullable();
            $table->string('base_unit_of_measure', 8)->nullable();
            $table->string('no_of_units', 8)->nullable();
            $table->string('smallest_unit', 3)->nullable();
            $table->string('effective_date', 10)->nullable();
            $table->string('sales_price', 10)->nullable();
            $table->string('language', 2)->nullable();
            $table->string('external_merchandise_category', 20)->nullable();
            $table->string('merchandise_category', 60)->nullable();
            $table->string('day_left', 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines_data');
    }
};
