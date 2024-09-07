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
        Schema::create('admin_logs', function (Blueprint $table) {
            $table->comment('');
            $table->bigInteger('id');
            $table->enum('type', ['admin_system_users', 'app_users'])->nullable();
            $table->integer('user_id')->default(0);
            $table->string('user_name', 191)->nullable();
            $table->string('user_action', 191)->nullable();
            $table->text('user_action_table')->nullable();
            $table->integer('user_action_table_id')->default(0);
            $table->longText('data_json')->nullable();
            $table->timestamp('add_date')->nullable();
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
        Schema::dropIfExists('admin_logs');
    }
};
