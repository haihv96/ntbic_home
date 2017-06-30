<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoiTacTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doi_tac_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDoiTac')->unsigned();
            $table->string('Ten');
            $table->longText('NoiDung');
            $table->string('HinhAnh')->nullable();
            $table->string('locale');
            $table->foreign('idDoiTac')->references('id')->on('doi_tac') ->onDelete('cascade');;
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
        Schema::dropIfExists('doi_tac_translation');
    }
}
