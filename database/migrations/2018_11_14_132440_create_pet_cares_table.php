<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',100);
            $table->string('telpon',20);
            $table->string('alamat',100);
            $table->string('jenis_binatang',100);
            $table->integer('lama_penitipan');
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
        Schema::dropIfExists('pet_cares');
    }
}
