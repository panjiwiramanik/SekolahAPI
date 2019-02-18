<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {

	protected $table = 'siswa';

    protected $fillable = [ 
    	'nis' ,'nama_lengkap' ,'jenis_kelamin' ,'alamat'
    ];

    public static $rules = [
        'nis' => 'required|min:15|integer',
		'nama_lengkap' => 'required|string',
		'jenis_kelamin' => 'required',
		'alamat' => 'required|string'
    ];

}
