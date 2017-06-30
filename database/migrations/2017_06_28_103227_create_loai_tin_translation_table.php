<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTinTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_tin_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idLoaiTin')->unsigned();
            $table->string('Ten')->nullable();
            $table->string('slug')->nullable();
            $table->string('locale')->nullable();
            $table->foreign('idLoaiTin')->references('id')->on('loai_tin') ->onDelete('cascade');
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
        Schema::dropIfExists('loai_tin_translation');
    }
}
