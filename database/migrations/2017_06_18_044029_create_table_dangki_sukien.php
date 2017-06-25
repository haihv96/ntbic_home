<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDangkiSukien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangki_sukien', function(Blueprint $table) {
            $table->integer('id_su_kien')->unsigned();
            $table->integer('id_nguoi_dang_ki_su_kien')->unsigned();
            $table->foreign('id_su_kien')->references('id')->on('su_kien');
            $table->foreign('id_nguoi_dang_ki_su_kien')->references('id')->on('nguoi_dang_ki_su_kien');
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
        Schema::dropIfExists('dangki_sukien');
    }
}
