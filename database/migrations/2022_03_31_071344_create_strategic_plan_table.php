<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategicPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategic_plan', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('mfo')->unsigned();
            $table->string('success_indicator')->nullable();
            $table->decimal('budget', 12, 2)->unsigned()->nullable();
            $table->tinyInteger('type')->unsigned();
            $table->integer('office')->unsigned()->nullable();
            $table->integer('period')->unsigned()->nullable();
            $table->tinyInteger('office')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('mfo')->references('id')->on('mfo');
            $table->foreign('office')->references('id')->on('office');
            // $table->foreign('period')->references('id')->on('period');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strategic_plan');
    }
}
