<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuKienTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('su_kien_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSuKien')->unsigned();
            $table->string('Ten')->nullable();
            $table->string('slug')->nullable();
            $table->longText('NoiDung')->nullable();
            $table->text('TomTat')->nullable();
            $table->text('HinhAnh')->nullable();
            $table->date('NgayBatDau')->nullable();
            $table->date('NgayKetThuc')->nullable();
            $table->foreign('idSuKien')->references('id')->on('su_kien') ->onDelete('cascade');
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
        Schema::dropIfExists('su_kien_translation');
    }
}
