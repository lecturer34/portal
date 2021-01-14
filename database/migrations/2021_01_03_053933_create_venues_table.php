<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->integer('capacity');
            $table->enum('type',['hall','theater','lab']);
            $table->enum('status',['good','bad']);
            $table->enum('has_multimedia',['yes','no']);
            $table->unsignedBigInteger('department_id');
            $table->timestamps();
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
