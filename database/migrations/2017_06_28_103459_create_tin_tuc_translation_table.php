<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinTucTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tuc_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTinTuc')->unsigned();
            $table->string('Ten');
            $table->longText('NoiDung');
            $table->text('TomTat');
            $table->text('HinhAnh');
            $table->boolean('status')->default(false);
            $table->foreign('idTinTuc')->references('id')->on('tin_tuc') ->onDelete('cascade');
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
        Schema::dropIfExists('tin_tuc_translation');
    }
}
