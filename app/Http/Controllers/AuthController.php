<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar_users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\ModelUser;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('account.login_user');
    }

    public function postLogin(Request $request)
    {

        $name = $request->name;
        $password = $request->password;


        $data = daftar_users::where('name',$name)->first();
        if($data){ 
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('nama_user',$data->nama_user);
                Session::put('email',$data->email);
                Session::put('avatar',$data->avatar);
                Session::put('level',$data->level);
                Session::put('login',TRUE);
                return redirect()->route('dashboard_user');
            }
                else{
                    return redirect()->back()->with('alert','Password atau Email, Salah !');
                }
            
           }
    }

    public function getRegister()
    {
    	return view('account.register_user');

    }

    public function postRegister(Request $request)
    {
        
    	ModelUser::create([
            'name'=> $request->username,
            'nama_user'=>'',
    		'email' => $request->useremail,
    		'password'=> bcrypt($request->userpassword), 
            'level'=> '2',
            'avatar'=>'',
            'alamat'=>'',
            'telepon' =>''

    	]);

    	return redirect()->route('login');
    }

    public function LogoutUser()

    {
        Session::flush();
        return redirect()->route('login');
    }

}


