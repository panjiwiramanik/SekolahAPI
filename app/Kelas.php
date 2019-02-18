<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model {

	protected $table = 'kelas';

    protected $fillable = [
    	'nama_kelas', 'jurusan'
    ];

    public static $rules = [
        'nama_kelas' => 'required',
        'jurusan' => 'required'
    ];

}
