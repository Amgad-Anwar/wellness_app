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
        Schema::create('users_titles', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id')->default(0);
            $table->integer('reporting_to_users_title_id')->default(0);
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('expectations_salary_from')->default(0);
            $table->integer('expectations_salary_to')->default(0);
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
        Schema::dropIfExists('users_titles');
    }
};
