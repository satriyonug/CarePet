<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',100);
            $table->string('alamat',100);
            $table->string('kota',100);
            $table->string('provinsi',100);
            $table->string('kodepos',10);
            $table->string('telpon',20);
            $table->integer('jumlah_barang');
            $table->string('catatan',500);
            $table->string('harga',10);
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
        Schema::dropIfExists('pet_shops');
    }
}
