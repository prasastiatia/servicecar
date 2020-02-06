@extends('users.user')
@section('content')
<link rel="stylesheet" href="{{url('assets/css/jquery-ui.css')}}" type="text/css" />
<link rel="stylesheet" href="{{url('assets/css/jquery-ui.timepicker.css?v=0.3.3')}}" type="text/css" />
<div class="box">
  <br>
    <div class="box-header with-border">
      <h3 class="box-title">&nbsp;&nbsp;TABEL JADWAL SERVICE PENGGUNA</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="container">
            <br>
          <a href="{{route('tambah_servis')}}" class="btn  btn-hijau"> Buat Jadwal </a>
          <br>
          <br>

          @if ($message = Session::get('ubah'))
            <div class="alert alert-info alert-block"> 
              <strong>{{ $message }}</strong>
            </div>
            @endif
            <br>
            <br>

          @if ($message = Session::get('Gagal'))
            <div class=" alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
            </div>
            @endif
@if(count($tabeljadwal))
      <table class="table  text" >
          <tr class="tbl-green" align="center">
            <b>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Jenis Servis</th>
              <th>Montir</th>
              <th>Harga</th>
              <th>Tanggal Servis</th>
              <th>Aksi</th>
            </b>
          </tr>
                
          @php
          $i = 1;
          @endphp 
          @foreach ($tabeljadwal as $tabeljadwal)
          <tr class="tbl-green1" align="center">
              <td>{{ $i}}</td>
              <td>{{ $tabeljadwal-> name }}</td>
              <td>{{ $tabeljadwal-> email }}</td>
              <td>{{ $tabeljadwal-> jenis_servis}}</td>
              <td>{{ $tabeljadwal-> montir}}</td>
              <td>{{ $tabeljadwal-> harga}}</td>
              <td>{{ date('d/m/Y',strtotime($tabeljadwal-> tanggal_servis))}}</td>

              
              <td>
                <button class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#delete{{$tabeljadwal->id}}">Hapus Data</button></td>
                
                              
            
          </tr>
          @php
          $i++;
          @endphp
          @endforeach
      </table>
      @endif

  </div>
</div>
</div>

@foreach ($hapus_jadwal as $tabeljadwal)
<div class="modal modal-danger fade" id="delete{{$tabeljadwal->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center" id="myModalLabel">Konfirmasi Hapus Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        
        <form action="{{route('jadwal.destroy',$tabeljadwal->id)}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
            
          <div class="modal-body">
          <p class="text-center">
            Apakah anda yakin untuk menghapus data ini?
          </p>
              <input type="hidden" name="jadwal_id" id="cat_id" value="">
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-warning">Ya, Hapus Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach


   </div>
   @endsection
