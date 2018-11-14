<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendPet extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;

	protected $fillable = [
	'nama_pengirim', 'telp_pengirim', 'nama_penerima', 'telp_penerima', 'alamat_jemput', 'alamat_antar', 'catatan_pengirim', 'catatan_driver', 'created_at', 'updated_at'
	];

}
