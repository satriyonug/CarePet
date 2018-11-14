<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetCare extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;

	protected $fillable = [
	'nama', 'telpon', 'alamat', 'jenis_binatang', 'lama_penitipan', 'catatan', 'created_at', 'updated_at'
	];

}
