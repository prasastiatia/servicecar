@extends('users.user')
@section('content')
<div class="box">
  <br>
    <div class="box-header with-border">
      <div class="container">
      <h3 class="box-title">TABEL PESAN TERKIRIM PENGGUNA</h3>
    </div>
    </div>

    <div class="box-body">
        <div class="container">
      <br>
    <a href="{{route('user_kirimpesan')}}"  class="btn btn-hijau"> Tambah Data </a>
    <br>
    <br>
    <!-- /.box-header -->
      <table class="table text" > 
              <tr class="tbl-green" align="center">
              <th>No</th>
              <th>Pengirim</th>
              <th>Penerima</th>
              <th>Subjek</th>
              <th>Pesan</td>
              <th>Aksi</th>
          </tr>
        

          @php
          $i = 1;
          @endphp 
          @foreach ($tabel_pesanterkirim as $tabel_pesanterkirim)
          <tbody>
          <tr class="tbl-green1" align="center">
              <td>{{ $i}}</td>
              <td>{{ $tabel_pesanterkirim-> pengirim }}</td>
              <td>{{ $tabel_pesanterkirim-> penerima }}</td>
              <td>{{ $tabel_pesanterkirim-> subject}}</td>
              <td>{{ $tabel_pesanterkirim-> pesan}}</td>
              <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$tabel_pesanterkirim->id}}"><a href="#">Hapus</a></button></td>
          </tr>
          </tbody>
          @php
          $i++;
          @endphp
          @endforeach
          
          
      </table>
      </div>
  </div>
</div>

@foreach ($hapus_pesan as $tabeljadwal)
<div class="modal modal-danger fade" id="delete{{$tabeljadwal->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center" id="myModalLabel">Konfirmasi Hapus Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        
        <form action="{{route('inbox.destroy',$tabeljadwal->id)}}" method="post">
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

@endsection