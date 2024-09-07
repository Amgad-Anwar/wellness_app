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
        Schema::create('our_price_lists_types', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id')->index();
            $table->integer('provider_type_id')->default(0)->index();
            $table->string('name')->nullable();
            $table->string('file_dir')->nullable();
            $table->string('file')->nullable();
            $table->string('file_old_name')->nullable();
            $table->string('file_size')->nullable();
            $table->string('file_info')->nullable();
            $table->string('file_ext')->nullable();
            $table->string('file_mimtype')->nullable();
            $table->text('file_header')->nullable();
            $table->boolean('matched')->default(0);
            $table->text('header_matches')->nullable();
            $table->integer('count')->default(0);
            $table->enum('status',config('app.statusArray'))->default(config('app.statusArray')[0]);
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
        Schema::dropIfExists('our_price_lists_types');
    }
};
