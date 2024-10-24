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
        Schema::table('provider_accounts_price_lists', function (Blueprint $table) {
            $table->after('department', function (Blueprint $table) {
                $table->string('image_dir')->nullable();
                $table->string('image')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provider_accounts_price_lists', function (Blueprint $table) {
            //
        });
    }
};
