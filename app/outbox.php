<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class outbox extends Model
{
    protected $table='outbox';
    protected $fillable =['pengirim','penerima','subject','pesan','balasan_pesan'];
}
