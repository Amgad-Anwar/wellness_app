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
        Schema::table('provider_accounts_price_lists_types', function (Blueprint $table) {
            $table->enum('type',['our_price','custom_price', 'medicines'])->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provider_accounts_price_lists_types', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
