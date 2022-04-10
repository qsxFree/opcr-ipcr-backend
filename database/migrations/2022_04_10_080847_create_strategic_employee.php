<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategicEmployee extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('strategic_employee', function (Blueprint $table) {
            $table->integer('strategic_plan')->unsigned();
            $table->integer('employee')->unsigned();

            $table->foreign('strategic_plan')->references('id')->on('strategic_plan');
            $table->foreign('employee')->references('id')->on('employee_profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('strategic_employee');
    }
}
