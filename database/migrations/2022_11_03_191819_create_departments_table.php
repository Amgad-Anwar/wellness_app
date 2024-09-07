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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(0);
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('number_in_cycle')->default(0);
            $table->integer('auto_assign')->default(0);
            $table->string('path')->nullable();
            $table->integer('expectations_budget_from')->default(0);
            $table->integer('expectations_budget_to')->default(0);
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
        Schema::dropIfExists('departments');
    }
};
