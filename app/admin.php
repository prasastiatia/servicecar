<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';
    protected $fillable =['name', 'nama_admin','email','password','level','avatar_admin','telepon','alamat'];
}
