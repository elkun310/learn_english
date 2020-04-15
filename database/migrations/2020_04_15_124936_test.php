<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Test extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nametest',100);
            $table->string('image');
            $table->text('content');
            $table->text('content_tiengviet');
            $table->timestamps();
            $table->bigInteger('idcategory')->unsigned();
            $table->bigInteger('idlevel')->unsigned();
            $table->foreign('idcategory')->references('id')->on('category')->onDelete('cascade');
            $table->foreign('idlevel')->references('id')->on('level')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
