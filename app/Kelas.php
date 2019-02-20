<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model {

	protected $table = 'kelas';

    protected $fillable = [
    	'nama_kelas', 'jurusan'
    ];

    public static $rules_add = [
        'nama_kelas' => 'required|unique:kelas,nama_kelas',
        'jurusan' => 'required|unique:kelas,jurusan'
    ];

    public static $rules_update = [
        'nama_kelas' => 'required',
        'jurusan' => 'required|unique:kelas,jurusan'
    ];

}
