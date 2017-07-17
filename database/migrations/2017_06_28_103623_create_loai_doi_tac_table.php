<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiDoiTacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_doi_tac', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->integer('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menu') ->onDelete('cascade');
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
        Schema::dropIfExists('loai_doi_tac');
    }
}
