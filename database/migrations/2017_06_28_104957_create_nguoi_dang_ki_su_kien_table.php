<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoiDangKiSuKienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dang_ki_su_kien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSuKien')->unsigned();
            $table->foreign('idSuKien')->references('id')->on('su_kien')->onDelete('cascade');
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
        Schema::dropIfExists('nguoi_dang_ki_su_kien');
    }
}
