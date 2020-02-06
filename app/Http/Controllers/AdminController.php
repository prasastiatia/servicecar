<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
use App\jadwal_servis;
use App\servis;
use App\outbox;
use App\inbox;
use App\admin;
use App\daftar_users;



class AdminController extends Controller
{
    public function dashboard()
	{
		if(Session()->get('login')==TRUE)
        {
		 $sesi1        = Session()->get('id');
    	 $jml_user     = ModelUser::count();
		 $jml_jadwal   = jadwal_servis::count();
		 $jml_inbox    = inbox::count();
		 $jml_outbox   = outbox::count();
		 $jml_servis   = servis::count();
		 $avatar       = admin:: find($sesi1);
		 return view('halaman_admin.dashboard_admin',['jml_user'=>$jml_user,  
		 'jml_jadwal'=>$jml_jadwal, 'jml_inbox'=>$jml_inbox , 'jml_outbox'=>$jml_outbox,
		 'jml_servis'=>$jml_servis,'avatar'=>$avatar]);
		}
		else
		{
			return redirect()->route('login_admin');
		}
    }

    public function admin_profil()
    {
		if(Session()->get('login')==TRUE)
        {
		$sesi1      = Session()->get('id');
		$sesi       = Session()->get('name');
		$admin      = admin:: where('name',$sesi)->get();
		$avatar     = admin:: find($sesi1);
		return view('halaman_admin.admin_profile',['admin'=>$admin,'avatar'=>$avatar]);
		}
		else
		{
			return redirect()->route('login_admin');
		}
    }

    public function update_profil(Request $request, $id)
    {
        $admin = admin::where('id',$id)->first();
        $admin->name = $request->name;
            $admin->nama_user = $request->nama_user;
            $admin->email = $request->email;
            $admin->telepon = $request->telepon;
            $admin->alamat = $request->alamat;
        $file = $request->file('avatar_admin');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('avatar_admin',$newName);
            $admin->avatar_admin = $newName;
        
        $admin->save();
        return redirect()->back();
    }

    public function tampiluser()
    {
		if(Session()->get('login')==TRUE)
        {
		$sesi1= Session()->get('id');
		$avatar = admin:: find($sesi1);
    	$tampiluser = daftar_users::all();
		 return view('halaman_admin.tabel_pengguna',['tampiluser'=>$tampiluser,'avatar'=>$avatar]);
		}
		else 
		{
			return redirect()->route('login_admin');
        }
    }

    public function tabel_servis()
	{
		if(Session()->get('login')==TRUE)
        {
		$sesi1          = Session()->get('id');
		$avatar         = admin:: find($sesi1);
		$tabel_servis   = servis::all();
		   return view('halaman_admin.admin_tabelservis',['tabel_servis'=>$tabel_servis,'avatar'=>$avatar]);
		}
		else 
		{
			return redirect()->route('login_admin');
		}
    }

    public function form_servis()
	{
		if(Session()->get('login')==TRUE)
        {
		$sesi1  = Session()->get('id');
		$avatar = admin:: find($sesi1);
		   return view('halaman_admin.admin_formservis',['avatar'=>$avatar]);
		}
		else 
		{
			return redirect()->route('login_admin');
		}
	}

    public function postFormServis(Request $request)
    { 
    
        $this->validate($request,[
            'jenis_servis'=>'required|min:4',
            'harga'       =>'required|min:4',
        ]);

        servis::create([
            'jenis_servis'=> $request->jenis_servis,
            'harga'       => $request->harga,            
        ]);

        return redirect()->route('tabel_servis')->with('success','Jadwal Berhasil Dibuat');
            
    }

    public function tabeljadwal()
    { 

		if(Session()->get('login')==TRUE)
        {
		$sesi1= Session()->get('id');
		$avatar = admin:: find($sesi1);
		$tabeljadwal = jadwal_servis::all();
		 return view('halaman_admin.jadwal',['tabeljadwal'=>$tabeljadwal,'avatar'=>$avatar]);
		}
		else
		{
			return redirect()->route('login_admin');
        }
    }

    public function tabel_balaspesan()
    {
        $sesi1= Session()->get('id');
		$avatar = admin:: find($sesi1);
        $admin_balaspesan = outbox::all();
        return view('halaman_admin.admin_pesanterkirim',['admin_balaspesan'=> $admin_balaspesan,'avatar'=>$avatar]);
   
    }

    public function hapus_pesanterkirim(Request $request)
    {
        $data = outbox::findOrFail($request->pesan_id);
        $data->delete();
        return redirect()->route('admin_pesanterkirim');
    }

    public function tabel_inbox()
    {
        $sesi1= Session()->get('id');
		$avatar = admin:: find($sesi1);
        $inbox= inbox::all();
        return view('halaman_admin.daftar_inboxadmin',['inbox'=>$inbox,'avatar'=>$avatar]);
    }

    public function balas_pesan($id)
    {
        $sesi1= Session()->get('id');
		$avatar = admin:: find($sesi1);
        $user = ModelUser::pluck('name');
        $admin_balaspesan= inbox::find($id);
        return view('halaman_admin.admin_balaspesan',compact('admin_balaspesan','user','avatar'));

    }

    public function postBalasPesan(Request $request)
    {
        $admin_balaspesan = outbox::all();
        $admin_balaspesan = new outbox;
        $admin_balaspesan->pengirim = $request->penerima;
        $admin_balaspesan->penerima = $request->pengirim;
        $admin_balaspesan->subject = $request->subject;
		$admin_balaspesan->pesan = $request->pesan;
        $admin_balaspesan->balasan_pesan = $request->balasan_pesan;
        $admin_balaspesan->save();
        Alert::success('Pesan terkirim ke user', 'Pesan Terkirim');
        return redirect()->route('admin_pesanterkirim');
    }
}
