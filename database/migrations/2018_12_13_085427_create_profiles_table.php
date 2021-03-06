<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
     Schema::create('profiles', function (Blueprint $table) {
         $table->increments('id');
         $table->string('nama', 100);
         $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
         $table->string('alamat');
         $table->char('no_telp', 20);
         $table->integer('user_id')->unsigned();
         $table->timestamps();
 
         $table->foreign('user_id')
               ->references('id')
               ->on('users')
               ->onUpdate('cascade')
               ->onDelete('cascade');
     });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
