<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinTucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tuc', function(Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->integer('idLoaiTinTuc')->unsigned();
            $table->foreign('idLoaiTinTuc')->references('id')->on('loai_tin') ->onDelete('cascade');;
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users') ->onDelete('cascade');
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
        Schema::dropIfExists('tin_tuc');
    }
}
