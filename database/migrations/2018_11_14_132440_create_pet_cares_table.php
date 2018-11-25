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
            $table->string('nama',100)->nullable();
            $table->string('telpon',20)->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('jenis_binatang',100)->nullable();
            $table->integer('lama_penitipan')->nullable();
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
        Schema::dropIfExists('pet_cares');
    }
}
