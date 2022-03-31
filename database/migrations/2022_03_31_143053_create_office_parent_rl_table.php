<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeParentRlTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('office_parent_rl', function (Blueprint $table) {
            $table->integer('child')->unsigned();
            $table->integer('parent')->unsigned();

            $table->foreign('child')->references('id')->on('office');
            $table->foreign('parent')->references('id')->on('office');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('office_parent_rl');
    }
}
