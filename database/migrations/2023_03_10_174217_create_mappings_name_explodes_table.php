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
        Schema::create('mappings_name_explodes', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id');
            $table->integer('position')->default(0);
            $table->string('string')->nullable();
            $table->integer('mapping_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mappings_name_explodes');
    }
};
