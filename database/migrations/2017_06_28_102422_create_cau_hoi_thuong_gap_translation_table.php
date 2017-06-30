<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauHoiThuongGapTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hoi_thuong_gap_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCauHoiThuongGap')->unsigned();
            $table->longtext('CauHoi')->nullable();
            $table->longtext('slug')->nullable();
            $table->longtext('CauTraLoi')->nullable();
            $table->string('locale')->nullable();
            $table->foreign('idCauHoiThuongGap')->references('id')->on('cau_hoi_thuong_gap')->onDelete('cascade');
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
        Schema::dropIfExists('cau_hoi_thuong_gap_translation');
    }
}
