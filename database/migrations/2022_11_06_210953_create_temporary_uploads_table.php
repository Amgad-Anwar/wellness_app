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
    public function up(): void
    {
        Schema::create('temporary_uploads', function (Blueprint $table) {
            //
            $table->id();
            $table->string('session_id')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('temporary_uploads');
    }
};
