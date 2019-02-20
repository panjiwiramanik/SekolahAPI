<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {

	protected $table = 'siswa';

    protected $fillable = [ 
    	'nis' , 'foto', 'nama_lengkap' ,'jenis_kelamin' ,'alamat'
    ];

    public static $rules_add = [
        'nis' => 'required|min:15|integer|unique:siswa,nis',
        'foto' => 'required|mimes:jpg,png,jpeg|image|max:2000',
        'nama_lengkap' => 'required|string',
        'jenis_kelamin' => 'required',
        'alamat' => 'required|string'
    ];

    public static $rules_update = [
        'nis' => 'required|min:15|integer',
        'foto' => 'required|mimes:jpg,png,jpeg|image|max:2000',
		'nama_lengkap' => 'required|string',
		'jenis_kelamin' => 'required',
		'alamat' => 'required|string'
    ];

}
