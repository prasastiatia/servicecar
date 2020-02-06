<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthAdminController extends Controller
{
    public function getLoginAdmin()
    {
    	return view('account.login_admin');
    }

    public function LogoutAdmin()
    {
        Session::flush();
        return redirect()->route('login_admin');
    }

    public function postLoginAdmin(Request $request)
    {

        $name = $request->name;
        $password = $request->password;


        $data = admin::where('name',$name)->first();
        if($data){ 
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('name',$data->name);
                Session::put('nama_admin',$data->nama_admin);
                Session::put('email',$data->email);
                Session::put('telepon',$data->telepon);
                Session::put('alamat',$data->alamat);
                Session::put('avatar',$data->avatar);
                Session::put('level',$data->level);
                Session::put('login',TRUE);
                return redirect()->route('admin');
            }
            else{
                    return redirect()->back()->with('alert','Password atau Email, Salah !');
                }
         }

    }
}
