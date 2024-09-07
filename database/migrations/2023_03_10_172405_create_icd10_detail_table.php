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
        Schema::create('icd10_detail', function (Blueprint $table) {
            $table->comment('');
            $table->integer('tabular_code')->nullable();
            $table->integer('index_code')->nullable();
            $table->string('diganosis_code', 3)->nullable();
            $table->string('detail_code', 5)->nullable();
            $table->string('description', 198)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icd10_detail');
    }
};
