<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachineParametersMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_parameters_machines', function (Blueprint $table) {
           $table->increments('id');
            $table->unsignedInteger('machine_parameter_id')->nullable();
            $table->unsignedInteger('machine_id')->nullable();

            $table->timestamps();
            $table->foreign('machine_parameter_id')->references('id')->on('machine_parameters');
            $table->foreign('machine_id')->references('id')->on('machines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machine_parameters_machines');
    }
}
