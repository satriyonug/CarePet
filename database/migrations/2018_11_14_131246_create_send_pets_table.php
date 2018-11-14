<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_pets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pengirim',100);
            $table->string('telp_pengirim',20);
            $table->string('nama_penerima',100);
            $table->string('telp_penerima',20);
            $table->string('alamat_jemput',200);
            $table->string('alamat_antar',200);
            $table->string('catatan_pengirim',500);
            $table->string('catatan_driver',500);
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
        Schema::dropIfExists('send_pets');
    }
}
