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
        Schema::create('service_approvals', function (Blueprint $table) {
            $table->id();
            $table->integer('provider_branch_id');
            $table->string('service_name');
            $table->float('price');
            $table->enum('status', ['pending', 'cancel', 'added', 'founded'])->default('pending');
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
        Schema::dropIfExists('service_approvals');
    }
};
