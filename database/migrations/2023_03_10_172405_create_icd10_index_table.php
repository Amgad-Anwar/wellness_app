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
        Schema::create('icd10_index', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tabular_order')->nullable();
            $table->integer('index_order')->nullable();
            $table->string('tabular_code')->nullable();
            $table->string('index_code')->nullable();
            $table->string('description', 184)->nullable();
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icd10_index');
    }
};
