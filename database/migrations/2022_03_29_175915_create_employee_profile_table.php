<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeProfileTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('employee_profile', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('user')->nullable()->unsigned();
            $table->integer('role')->unsigned();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('extension_name')->nullable();
            $table->integer('office')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('user')->references('id')->on('user');
            $table->foreign('role')->references('id')->on('employee_role');
            //$table->foreign('office')->references('id')->on('office');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('employee_profile');
    }
}
