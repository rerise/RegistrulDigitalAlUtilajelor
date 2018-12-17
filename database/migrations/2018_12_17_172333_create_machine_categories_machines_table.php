<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachineCategoriesMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_categories_machines', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('machine_id')->nullable();
            $table->unsignedInteger('machine_category_id')->nullable();

            $table->timestamps();
            $table->foreign('machine_id')->references('id')->on('machines');
            $table->foreign('machine_category_id')->references('id')->on('machine_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machine_categories_machines');
    }
}
