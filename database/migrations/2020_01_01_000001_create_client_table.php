<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_client', function (Blueprint $table) {
            $table->bigIncrements('client_id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->integer('age')->unsigned();
            $table->string('email', 255);
            $table->string('contact_number', 50);
            $table->text('address');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
