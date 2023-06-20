<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMihmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mihmen', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('phone')->nullable();
            $table->text('mizban')->nullable();
            $table->text('tarikh1')->nullable();
            $table->text('tarikh2')->nullable();
            $table->text('tarikh3')->nullable();
            $table->text('parking')->nullable();
            $table->text('nahar')->nullable();
            $table->text('wifi')->nullable();
            $table->text('vaz')->nullable();
            $table->text('vaz2')->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mihmen');
    }
}
