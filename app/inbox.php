<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inbox extends Model
{
    protected $table='inbox';
    protected $fillable =['pengirim','penerima','subject','pesan'];
}
