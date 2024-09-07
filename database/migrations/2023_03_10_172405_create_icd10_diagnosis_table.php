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
        Schema::create('icd10_diagnosis', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tabular_order')->nullable();
            $table->integer('index_order')->nullable();
            $table->string('tabular_code')->nullable();
            $table->string('index_code')->nullable();
            $table->string('diganosis_code', 3)->nullable();
            $table->string('description', 185)->nullable();
            $table->integer('status')->nullable();
            $table->integer('waiting_period')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('marital_status')->nullable();
            $table->integer('from_age')->nullable();
            $table->integer('to_age')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icd10_diagnosis');
    }
};
