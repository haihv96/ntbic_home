<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableToChuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_chuc', function(Blueprint $table) {
            $table->increments('id');
            $table->longText('gioi_thieu_chung')->nullable();
            $table->longText('vi_tri_chuc_nang')->nullable();
            $table->longText('su_menh_tam_nhin')->nullable();
            $table->longText('co_cau')->nullable();
            $table->longText('doi_ngu_trung_tam')->nullable();
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
        Schema::dropIfExists('to_chuc');
    }
}
