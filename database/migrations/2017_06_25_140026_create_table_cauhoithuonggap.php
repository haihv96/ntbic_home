<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCauhoithuonggap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('cau_hoi_thuong_gap', function(Blueprint $table) {
            $table->increments('id');
            $table->longtext('cau_hoi');
            $table->longtext('cau_hoi_khong_dau');
            $table->longtext('cau_tra_loi');
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
