<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTuyendung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('tuyen_dung', function(Blueprint $table) {
            $table->increments('id');
            $table->string('mo_ta');
            $table->string('mo_ta_khong_dau');
            $table->longtext('noi_dung_tuyen_dung');
            $table->datetime('ngay_bat_dau');
            $table->datetime('ngay_ket_thuc');
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
        //
    }
}
