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
        Schema::create('anatomy_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('anatomy_layer_id')->default(0);
            $table->integer('parent_id')->default(0);
            $table->string('title')->nullable();
            $table->string('layer_no')->nullable();
            $table->string('description')->nullable();
            $table->string('icon_dir')->nullable();
            $table->string('icon')->nullable();
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
        Schema::dropIfExists('anatomy_categories');
    }
};
