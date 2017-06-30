<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToChucTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_chuc_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idToChuc')->unsigned();
            $table->longText('GioiThieuChung')->nullable();
            $table->longText('ViTriChucNang')->nullable();
            $table->longText('SuMenhTamNhin')->nullable();
            $table->longText('CoCau')->nullable();
            $table->longText('DoiNguTrungTam')->nullable();
            $table->string('slug')->nullable();
            $table->string('locale')->nullable();
            $table->foreign('idToChuc')->references('id')->on('to_chuc') ->onDelete('cascade');;
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
        Schema::dropIfExists('to_chuc_translation');
    }
}
