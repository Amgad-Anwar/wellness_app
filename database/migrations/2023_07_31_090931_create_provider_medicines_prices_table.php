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
        Schema::create('provider_medicines_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('medicine_id')->default(0)->index();
            $table->integer('provider_account_id')->default(0)->index();
            $table->integer('provider_type_id')->default(0)->index();
            $table->double('price')->default(0);
            $table->integer('discount_price')->default(0);
            $table->integer('updated_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('provider_medicines_prices');
    }
};
