<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEmployeeTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        // Schema::table('employee_profile', function (Blueprint $table) {
        //     $table->foreign('office')->references('id')->on('office');
        // });

        Schema::table('employee_role', function (Blueprint $table) {
            $table->foreign('office')->references('id')->on('office');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }
}
