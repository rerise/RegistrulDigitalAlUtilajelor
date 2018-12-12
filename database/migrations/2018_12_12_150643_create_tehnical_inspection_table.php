<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// ITP - inspectia tehnica periodica
// Technical periodical inspection
class CreateTehnicalInspectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tehnical_inspection', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('machine_id');
            $table->dateTime('expires_at');
            $table->string('details')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('tehnical_inspection');
    }
}
