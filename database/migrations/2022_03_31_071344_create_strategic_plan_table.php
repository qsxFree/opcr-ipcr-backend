<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategicPlanTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('strategic_plan', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('mfo')->unsigned();
            $table->string('strategic_plan')->nullable();
            $table->decimal('budget')->unsigned()->nullable();
            $table->tinyInteger('type')->unsigned();
            $table->integer('office')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('mfo')->references('id')->on('mfo');
            $table->foreign('office')->references('id')->on('office');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('strategic_plan');
    }
}
