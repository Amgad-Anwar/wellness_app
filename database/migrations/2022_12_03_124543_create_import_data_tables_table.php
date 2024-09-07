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
        Schema::create('import_data_tables', function (Blueprint $table) {
            $table->id();
            $table->string('table_name')->nullable();
            $table->string('generated_table_name')->nullable();
            $table->text('match_columns')->nullable();
            $table->string('file_dir')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_old_name')->nullable();
            $table->string('file_size')->nullable();
            $table->string('file_info')->nullable();
            $table->string('file_ext')->nullable();
            $table->string('file_mimtype')->nullable();
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
        Schema::dropIfExists('import_data_tables');
    }
};
