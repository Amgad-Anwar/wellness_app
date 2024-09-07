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
        Schema::table('our_price_lists', function (Blueprint $table) {
            $table->integer('count_limit')->nullable()->after('code')->comment('max count of service can customer take');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_price_lists', function (Blueprint $table) {
            $table->dropColumn('count_limit');
        });
    }
};
