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
            $table->integer('id_barang')->nullable();
            $table->integer('id_user')->nullable();
            $table->string('nama',100)->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('kota',100)->nullable();
            $table->string('provinsi',100)->nullable();
            $table->string('kodepos',10)->nullable();
            $table->string('telpon',20)->nullable();
            $table->integer('jumlah_barang')->nullable();
            $table->string('catatan',500)->nullable();
            $table->string('harga',10)->nullable();
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
