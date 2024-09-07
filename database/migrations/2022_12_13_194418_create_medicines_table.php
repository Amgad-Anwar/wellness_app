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
        Schema::create('medicines', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('medicine_category_id')->nullable()->index('medicine_category_id');
            $table->unsignedBigInteger('medicine_based_unit_type_id');
            $table->string('med_id')->nullable()->index('med_id');
            $table->string('name')->nullable();
            $table->string('article_description')->nullable();
            $table->string('use')->nullable();
            $table->string('company')->nullable();
            $table->string('discount_status_type')->nullable();
            $table->string('origin_status')->nullable();
            $table->string('created')->nullable();
            $table->string('base_unit_of_measure')->nullable();
            $table->string('no_of_units')->nullable();
            $table->string('smallest_unit')->nullable();
            $table->string('effective_date')->nullable();
            $table->string('sales_price')->nullable();
            $table->integer('discount_price')->default(0);
            $table->integer('insurance_price')->default(0);
            $table->double('privet_price')->default(0);
            $table->double('public_price')->default(0);
            $table->string('language')->nullable();
            $table->string('external_merchandise_category')->nullable();
            $table->string('merchandise_category')->nullable();
            $table->string('day_left')->nullable();
            $table->integer('min_day')->default(0);
            $table->integer('max_day')->default(0);
            $table->integer('min_quantity')->default(0);
            $table->integer('max_quantity')->default(0);
            $table->integer('min_daily_dose')->default(0);
            $table->integer('max_daily_dose')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamp('updated_at')->nullable();
            $table->integer('updated_by')->default(0);
            $table->softDeletes();
            $table->integer('deleted_by')->default(0);

            $table->index(['id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
};
