<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('messages');
        
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author')->nullable();
            $table->text("message");
            $table->unsignedInteger('contact_id')->nullable();

            $table->timestamps();

            $table->foreign('contact_id')->references('id')->on('contacts');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
