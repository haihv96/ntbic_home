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
        Schema::create('cau_hoi_thuong_gap_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cau_hoi_thuong_gap_id')->unsigned();
            $table->longtext('CauHoi');
            $table->longtext('CauTraLoi')->nullable();
            $table->string('locale')->unique();
            $table->foreign('cau_hoi_thuong_gap_id')->references('id')->on('cau_hoi_thuong_gap')->onDelete('cascade');
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
        Schema::dropIfExists('cau_hoi_thuong_gap_translations');
    }
}
