<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_project', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->foreignId('employee_id')
                ->nullable()
                ->constrained('t_employee', 'employee_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('client_id')
                ->nullable()
                ->constrained('t_client', 'client_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('project_name', 255);
            $table->date('project_start_date');
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
