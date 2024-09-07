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
        Schema::create('icd10', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('parent_id')->default(0)->index('parent_id');
            $table->integer('order')->default(0)->index('order');
            $table->string('type')->nullable()->index('type');
            $table->string('code')->nullable()->index('code');
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->integer('waiting_period')->default(0);
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->integer('from_age')->default(0);
            $table->integer('to_age')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamp('updated_at')->nullable();
            $table->integer('updated_by')->default(0);
            $table->softDeletes();
            $table->integer('deleted_by')->default(0);

            $table->index(['id'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icd10');
    }
};
