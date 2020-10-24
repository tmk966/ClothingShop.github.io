<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tensp');
            $table->integer('soluong');
            $table->integer('gia');
            $table->string('anh');
            $table->integer('idloai')->unsigned();
            $table->foreign('idloai')->references('id')->on('loais');
            $table->integer('idncc')->unsigned();
            $table->foreign('idncc')->references('id')->on('nha_cung_caps');
            $table->string('mota');
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
        Schema::dropIfExists('san_phams');
    }
}
