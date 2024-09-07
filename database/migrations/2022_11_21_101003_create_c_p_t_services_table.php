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
        Schema::create('cpt_services', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(0);
            $table->integer('cpt_category_id')->default(0);
            $table->string('cpt_service_code')->nullable();
            $table->text('cpt_service_long_name')->nullable();
            $table->string('cpt_service_short_name')->nullable();
            $table->string('cpt_service_description')->nullable();
            $table->integer('cpt_services_mapping_count')->default(0);
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
        Schema::dropIfExists('cpt_services');
    }
};
