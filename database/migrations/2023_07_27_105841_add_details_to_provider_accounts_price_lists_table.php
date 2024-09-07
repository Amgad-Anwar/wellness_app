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
            $table->string('service_unit_type')->nullable()->after('service_medical_name');
            $table->integer('number_of_units')->nullable()->after('department');
            $table->string('cpt_code')->nullable()->after('code');
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
            $table->dropColumn(['service_unit_type', 'number_of_units', 'cpt_code']);
        });
    }
};
