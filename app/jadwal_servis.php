<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_servis extends Model
{
    protected $primaryKey='id';
    protected $table='jadwal_servis';
    protected $fillable =['name','email','jenis_servis','harga','montir','tanggal_servis'];
}
