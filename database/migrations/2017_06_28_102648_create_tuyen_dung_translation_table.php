<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuyenDungTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuyen_dung_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTuyenDung')->unsigned();
            $table->string('MoTa');
            $table->longtext('NoiDungTuyenDung');
            $table->foreign('idTuyenDung')->references('id')->on('tuyen_dung')->onDelete('cascade');
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
        Schema::dropIfExists('tuyen_dung_translation');
    }
}
