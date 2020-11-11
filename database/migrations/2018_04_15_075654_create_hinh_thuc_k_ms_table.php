<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhThucKMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_thuc_k_ms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hThuc');
            $table->integer('idKM')->unsigned();
            $table->foreign('idKM')->references('id')->on('khuyen_mais');
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
        Schema::dropIfExists('hinh_thuc_k_ms');
    }
}
