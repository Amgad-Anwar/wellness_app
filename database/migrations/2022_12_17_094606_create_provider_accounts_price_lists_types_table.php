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
        Schema::create('provider_accounts_price_lists_types', function (Blueprint $table) {
            $table->id();
            $table->integer('provider_account_id')->index('provider_account_id');
            $table->integer('provider_type_id')->index('provider_type_id');
            $table->integer('our_price_lists_type_id')->default(0)->index('our_price_lists_type_id');
            $table->enum('type',['our_price','custom_price', 'medicines'])->index();

            $table->integer('count')->default(0);
            $table->enum('status',config('app.statusArray'))->default(config('app.statusArray')[0]);
            $table->integer('updated_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('provider_accounts_price_lists_types');
    }
};
