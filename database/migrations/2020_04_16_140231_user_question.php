<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_question', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('question_id')->unsigned();
            $table->integer('sum_answer_right');
            $table->integer('sum_answer_false');
            $table->integer('sum_people_right');
            $table->integer('sum_people_false');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('question')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_question');
    }
}