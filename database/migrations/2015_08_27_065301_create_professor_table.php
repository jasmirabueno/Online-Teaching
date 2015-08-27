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
            $table->string('name');
            $table->string('imagefile');
            $table->string('position');
            $table->string('department');
            $table->text('about');
            $table->string('email');
            $table->string('password', 60);
            $table->timestamp('accepted_at');
            $table->timestamps();
            
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
