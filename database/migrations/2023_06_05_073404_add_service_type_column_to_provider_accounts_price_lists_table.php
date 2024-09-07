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
            $table->integer('service_type_id')->default(0)->index('provider_accounts_price_lists_service_type_id')->after('provider_accounts_price_lists_type_id');
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
            $table->dropColumn('service_type_id');
        });
    }
};
