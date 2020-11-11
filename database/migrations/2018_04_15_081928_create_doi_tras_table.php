<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoiTrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doi_tras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDonHang')->unsigned();
            $table->foreign('idDonHang')->references('id')->on('don_hangs');
            $table->integer('idSP')->unsigned();
            $table->foreign('idSP')->references('id')->on('san_phams');
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
        Schema::dropIfExists('doi_tras');
    }
}
