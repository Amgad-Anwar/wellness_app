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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->char('iso', 2)->nullable();
            $table->string('nicename', 80)->nullable();
            $table->string('name', 80)->nullable();
            $table->char('iso3', 3)->nullable();
            $table->smallInteger('numcode')->nullable();
            $table->integer('code')->nullable();
            $table->string('arab_name', 80)->nullable();
            $table->integer('sort')->default(0);
            $table->integer('usa_sort');
            $table->integer('tpay')->nullable()->default(0);
            $table->string('flag_dir')->nullable();
            $table->string('flag_size')->nullable();
            $table->string('flag')->nullable();
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
        Schema::dropIfExists('countries');
    }
};
