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
        Schema::create('admin_changes_logs', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id');
            $table->string('action')->nullable();
            $table->integer('table_id')->default(0);
            $table->string('table_name')->nullable();
            $table->text('text')->nullable();
            $table->text('records_change')->nullable();
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('request_url')->nullable();
            $table->string('request_method')->nullable();
            $table->text('request_data')->nullable();
            $table->integer('created_by')->default(0);
            $table->string('created_by_name')->nullable();
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
        Schema::dropIfExists('admin_changes_logs');
    }
};
