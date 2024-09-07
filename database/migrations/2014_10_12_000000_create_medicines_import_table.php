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
        Schema::create('medicines_import', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('med_id')->nullable()->index();
            $table->string('price')->nullable();
            $table->string('effective_date')->nullable();
            $table->integer('is_new')->default(0);
            $table->string('old_name')->nullable();
            $table->string('old_price')->nullable();
            $table->string('old_effective_date')->nullable();
            $table->integer('has_changes')->default(0);
            $table->integer('created_by')->default(0);
            $table->integer('deleted_by')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines_import');
    }
};
