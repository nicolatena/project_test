<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
   Schema::create('kendaraan', function (Blueprint $table) {
       $table->increments('id');
       $table->string('nama_kendaraan');
       $table->string('jenis_kendaraan');
       $table->string('buatan');
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
        Schema::dropIfExists('kendaraan');
    }
}
