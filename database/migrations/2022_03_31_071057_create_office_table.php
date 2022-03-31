<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('office', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->integer('parent')->unsigned()->nullable();
            $table->boolean('is_delivery_unit')->default(false);
            $table->integer('head')->unsigned()->nullable();

            $table->foreign('parent')->references('id')->on('office');
            $table->foreign('head')->references('id')->on('employee_profile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('office');
    }
}
