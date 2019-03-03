<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {

	protected $table = 'siswa';

    protected $fillable = [ 
    	'nis' , 'foto', 'nama_lengkap' ,'jenis_kelamin' ,'alamat'
    ];

    protected $hidden =  [
        'created_at', 'updated_at'
    ];

    public static $rules_add = [
        'nis' => 'required|min:15|integer|unique:siswa,nis',
        'nama_lengkap' => 'required|string',
        'jenis_kelamin' => 'required',
        'alamat' => 'required|string'
    ];

    public static $rules_update = [
        'nis' => 'required|min:15|integer',
		'nama_lengkap' => 'required|string',
		'jenis_kelamin' => 'required',
		'alamat' => 'required|string'
    ];

}
