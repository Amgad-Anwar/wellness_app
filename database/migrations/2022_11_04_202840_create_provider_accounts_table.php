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
        Schema::create('provider_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('unique_name');
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->text('inactive_reason')->nullable();
            $table->enum('status',['active','suspend', 'cancel'])->nullable();
            $table->timestamp('active_at')->nullable();
            $table->timestamp('inactive_at')->nullable();
            $table->string('phone')->nullable();
            $table->enum('fees_type',['over_price', 'inside_price'])->nullable()->comment('over_price:it will calculate the feeds and add to the price of service ,inside_price:is of the service price');
            $table->enum('fees_amount_type',['percentage', 'amount'])->nullable();
            $table->integer('fees_amount')->default(0);
            $table->enum('fees_calculate',['total', 'per_product'])->nullable()->comment('[total:is for the total of the order ,per_product:is per total of each product it used when the fees amount type is amount ]');
            $table->enum('limit_pull_money_type',['per_day', 'per_week','per_month'])->nullable()->comment('[total:is for the total of the order ,per_product:is per total of each product it used when the fees amount type is amount ]');
            $table->integer('limit_pull_money_amount')->default(0);
            $table->string('logo_dir')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('provider_accounts');
    }
};
