<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetShop extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;

	protected $fillable = [
	'nama', 'alamat', 'kota', 'provinsi', 'kodepos', 'telpon', 'jumlah_barang', 'catatan', 'created_at', 'updated_at'
	];

}
