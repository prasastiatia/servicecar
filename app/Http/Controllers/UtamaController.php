<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class UtamaController extends Controller
{
     public function home(){
		return view('template.utama');
	}


}
