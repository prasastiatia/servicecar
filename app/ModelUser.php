<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    protected $primaryKey='name';
	protected $table = 'users';
    protected $fillable =[
    	
		'name',
		'nama_user',
    	'email',
		'password',
		'level',
		'avatar',
		'telepon',
		'alamat'
    	

    ];
}
