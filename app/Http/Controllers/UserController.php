<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar_users;
use App\ModelUser;
use App\jadwal_servis;
use App\servis;
use App\admin;
use App\inbox;
use App\outbox;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
     public function dashboard()
    {
        if(Session()->get('login')==TRUE)
        {
        $sesi1 = Session()->get('name');
        $User = ModelUser::find($sesi1);
        $user = $User->avatar;

        return view('halaman_pengguna.dashboard_user',['user'=>$user]);
        }
        else
        {
        return redirect()->route('login');
        }
    }

     public function user_profile()
    {
        if(Session()->get('login')==TRUE)
        {
        $sesi1 = Session()->get('name');
        $User = ModelUser::find($sesi1);
        $user = $User->avatar;
        $user1 = Session()->get('name');
            $user_ = ModelUser:: where('name',$user1)->get();
        return view('halaman_pengguna.user_profile',compact('user_'),['user'=>$user]);
        }
        else
        {
        return redirect()->route('login');
        }
    }

    public function update_profil(Request $request)
    {
            $user1 = session()->get('name');
            $user_ = ModelUser::where('name',$user1)->firstOrFail();
            $user_->name = $request->name;
            $user_->nama_user = $request->nama_user;
            $user_->email = $request->email;
            $user_->telepon = $request->telepon;
            $user_->alamat = $request->alamat;
            $file = $request->file('avatar');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('avatar_user',$newName);
            $user_->avatar = $newName;
        
        $user_->save();
    
        return redirect()->back()->with('alert-success','Data berhasil diubah!');
    }

    public function tampiljadwaluser()
    {
        if(Session()->get('login')==TRUE)
        {
        $sesi = Session()->get('name');
        $tabeljadwal = jadwal_servis::where('name',$sesi) -> get();
        $sesi1 = Session()->get('name');
        $User = ModelUser::find($sesi1);
        $user = $User->avatar;
        $hapus_jadwal = jadwal_servis::all();
        $edit_jadwal = jadwal_servis::all();
    
        return view('halaman_pengguna.jadwal_service',['tabeljadwal'=>$tabeljadwal, 'hapus_jadwal'=> $hapus_jadwal,
                    'user'=>$user,'edit_jadwal'=>$edit_jadwal]);
        }
        else
        {
        return redirect()->route('login');
        }
    }

    public function getFormJadwal()
    {
        if(Session()->get('login')==TRUE)
        {
        $sesi1 = Session()->get('name');
        $User = ModelUser::find($sesi1);
        $user = $User->avatar;
      	$jenis_servis = servis::all();
        return view('halaman_pengguna.buat_service', compact('jenis_servis'),['user'=>$user]);
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function postFormJadwal(Request $request)
    { 
        $tanggal =strtr($request->tanggal_pesan,'/','-');
        $tgl = date('Y-m-d',strtotime($tanggal));

        jadwal_servis::create([
            'name'=> $request->name,
            'email' => $request->email,
            'jenis_servis'=> $request->jenis_servis,
            'harga'=> $request->harga,
            'montir'=> $request->montir,
            'tanggal_servis'=>$tgl,            
        ]);

        return redirect()->route('tabel_jadwaluser')->with('success','Jadwal Berhasil Dibuat');
        
        
    }

    public function hapus_jadwal($id)
    {
        $data = jadwal_servis::findOrFail($id);
        $data->delete();
        return redirect()->route('tabel_jadwaluser');
    }

    
    public function cariHarga(Request $request)
    {
    	$harga = servis::select('*')->where('jenis_servis',$request->jenis_servis)->first();
    	return response()->json($harga);
    }

    public function getFormInbox()
        {
            if(Session()->get('login')==TRUE)
        {
            $sesi1 = Session()->get('name');
            $User = ModelUser::find($sesi1);
            $user = $User->avatar;
            $user_kirimpesan = admin:: all();
        return view('halaman_pengguna.user_kirimpesan',['user_kirimpesan'=>$user_kirimpesan,'user'=>$user]);
        }
        else
        {
            return redirect()->route('login');
        }
    }
    
    public function postFormInbox(Request $request)
    {
        $this->validate($request,[
            'pengirim'=>'required:min:4',
            'penerima'=>'required|min:4',
            'subject'=>'required',
            'pesan' => 'required '
        ]);
        inbox::create([
            'pengirim' => $request->pengirim,
            'penerima'=> $request->penerima,
            'subject'=> $request->subject,
            'pesan' => $request->pesan
        ]);
        return redirect()-> route('tabel_pesanterkirim');

    }

    public function tabel_pesanterkirim()
        {
            if(Session()->get('login')==TRUE)
        {
            $sesi1 = Session()->get('name');
        $User = ModelUser::find($sesi1);
        $user = $User->avatar;
            $sesi = Session()->get('name');
            $tabel_pesanterkirim = inbox:: where('pengirim',$sesi)->get();
            $hapus_pesan = inbox::all();
        return view('halaman_pengguna.tabel_pesanterkirim',['tabel_pesanterkirim'=>$tabel_pesanterkirim,'user'=>$user, 'hapus_pesan'=>$hapus_pesan]);
        }
        else
        {
            return redirect()->route('login');
        }
    }

        public function tabel_inbox()

        {
            if(Session()->get('login')==TRUE)
        {
            $sesi1 = Session()->get('name');
        $User = ModelUser::find($sesi1);
        $user = $User->avatar;
            $sesi = Session()->get('name');
            $tabel_inbox = outbox:: where('penerima',$sesi)->get();
            $hapus_inbox = outbox::all();
        return view('halaman_pengguna.tabel_inbox',['tabel_inbox'=>$tabel_inbox,'user'=>$user, 'hapus_inbox'=>$hapus_inbox]);
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function hapus_inbox (Request $request)
    {
        $data = outbox::findOrFail($request->outbox_id);
        $data->delete();
        return redirect()->route('tabel_inbox');
    }
    
        public function destroy(Request $request)
        {
        outbox::find($request->id)->delete();
        return redirect()->route('admin_pesanterkirim')
                    ->with('success','Data deleted successfully');
        }

        public function hapus_pesanterkirim($id)
    {
        $data = outbox::findOrFail($id);
        $data->delete();
        return redirect()->route('tabel_pesanterkirim');
    }



        
}
