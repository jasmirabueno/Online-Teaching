<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inst_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('image');
            $table->string('position');
            $table->string('department');
            $table->text('description');
            $table->boolean('verified');
            $table->timestamp('verified_at');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('inst_id')->references('id')->on('institution')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('professor');
    }
}
