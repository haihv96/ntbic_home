<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoiDangKiSuKienTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dang_ki_su_kien_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDangKy')->unsigned();
            $table->string('Ten')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('locale')->nullable();
            $table->foreign('idDangKy')->references('id')->on('nguoi_dang_ki_su_kien')->onDelete('cascade');
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
        Schema::dropIfExists('nguoi_dang_ki_su_kien_translation');
    }
}
