<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('vahed')->nullable();
            $table->text('kala')->nullable();
            $table->text('tedad')->nullable();
            $table->text('tarikh1')->nullable();
            $table->text('tarikh2')->nullable();
            $table->text('dec')->nullable();
            $table->text('mas')->nullable();
            $table->text('tah')->nullable();
            $table->text('price')->nullable();
            $table->text('vaz1')->nullable();
            $table->text('vaz2')->nullable();
            $table->text('com1')->nullable();
            $table->text('com2')->nullable();
            $table->text('t1')->nullable();
            $table->text('t2')->nullable();
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
        Schema::dropIfExists('kalas');
    }
}
