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
        Schema::create('employeeProfile', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('user')->unsigned();
            $table->integer('role')->unsigned();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('extension_name')->nullable();
            $table->integer('office')->unsigned();
            $table->foreign('user')->references('id')->on('user');
            $table->foreign('role')->references('id')->on('employeerole');
            $table->foreign('office')->references('id')->on('office');
            $table->timestamps();
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
