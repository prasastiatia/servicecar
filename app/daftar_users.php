<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar_users extends Model
{
    protected $table='users';
    protected $fillable =[
    	
    	'name',
    	'email',
    	'password',
		'level',
		'avatar',
		'telepon',
		'alamat'
    	

    ];
}
