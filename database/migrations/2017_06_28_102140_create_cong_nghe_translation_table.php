<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongNgheTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cong_nghe_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCongNghe')->unsigned();
            $table->string('Ten')->nullable();
            $table->string('slug')->nullable();
            $table->longText('NoiDung')->nullable();
            $table->string('locale')->nullable();
            $table->foreign('idCongNghe')->references('id')->on('cong_nghe')->onDelete('cascade');
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
        Schema::dropIfExists('cong_nghe_translation');
    }
}
