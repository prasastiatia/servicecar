@extends('admin.admin')
@section('content')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">TABEL KOTAK MASUK ADMIN</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table" >
          <tr class="tbl-green" align="justify">
              <td>No</td>
              <td>Pengirim</td>
              <td>Penerima</td>
              <td>Subject</td>
              <td>Pesan</td>
              <td>Aksi</td>
          </tr>

          @php
          $i = 1;
          @endphp 
          @foreach ($inbox as $tabel_pesanterkirim)
          <tr class="tbl-green1" align="justify">
              <td>{{ $i}}</td>
              <td>{{ $tabel_pesanterkirim-> pengirim }}</td>
              <td>{{ $tabel_pesanterkirim-> penerima }}</td>
              <td>{{ $tabel_pesanterkirim-> subject}}</td>
              <td>{{ $tabel_pesanterkirim-> pesan}}</td>
              <td><button type="button" class="btn btn-danger" onclick="window.location.href='{{action('AdminController@balas_pesan',['id'=>$tabel_pesanterkirim->id])}}'" class="color-white">Balas Pesan</button></td>
          </tr>
          @php
          $i++;
          @endphp
          @endforeach
          
      </table>
  </div>
</div>
@endsection