<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servis extends Model
{
    protected $table='servis';
    protected $fillable =['jenis_servis','harga'];
}
