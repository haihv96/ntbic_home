<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTinTuc extends Migration
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
            $table->string('ten');
            $table->string('ten_khong_dau');
            $table->longText('noi_dung');
            $table->text('tom_tat');
            $table->text('hinh_anh');
            $table->integer('id_loai_tin')->unsigned();
            $table->boolean('status')->default(false);
            $table->foreign('id_loai_tin')->references('id')->on('loai_tin') ->onDelete('cascade');;
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
