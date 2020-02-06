<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal_servis;
use App\outbox;

class Jadwal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin_balaspesan = outbox::all();
        $admin_balaspesan = new outbox;
        $admin_balaspesan->pengirim = $request->penerima;
        $admin_balaspesan->penerima = $request->pengirim;
        $admin_balaspesan->subject = $request->subject;
		$admin_balaspesan->pesan = $request->pesan;
        $admin_balaspesan->balasan_pesan = $request->balasan_pesan;
        $admin_balaspesan->save();
        return redirect()->route('admin_pesanterkirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = inbox::findOrFail($id);
        $data->delete();
        return redirect()->route('tabel_pesanterkirim');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = jadwal_servis::findOrFail($id);
        $data->delete();
        return redirect()->route('tabel_jadwaluser');
    }

    
}
