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
        Schema::create('cpt_services_file', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id');
            $table->string('service_code', 11)->nullable();
            $table->string('long_name', 968)->nullable();
            $table->string('parent', 24)->nullable();
            $table->string('sup', 169)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpt_services_file');
    }
};
