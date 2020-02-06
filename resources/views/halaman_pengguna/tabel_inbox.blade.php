@extends('users.user')
@section('content')
<div class="box">
  <br>
    <div class="box-header with-border">
      <div class="container">
      <h3 class="box-title">TABEL KOTAK MASUK PENGGUNA</h3>
    </div>
    <!-- /.box-header -->
</div>
    <br>

    <div class="box-body">
        <div class="container">
      <table class="table text" >
          <tr class="tbl-green" align="center">
              <th>No</th>
              <th>Pengirim</th>
              <th>Penerima</th>
              <th>Subjek</th>
              <th>Pesan</th>
              <th>Balasan Pesan</th>
          </tr>

          @php
          $i = 1;
          @endphp 
          @foreach ($tabel_inbox as $tabel_pesanterkirim)
          <tr class="tbl-green1" align="center">
              <td>{{ $i}}</td>
              <td>{{ $tabel_pesanterkirim-> pengirim }}</td>
              <td>{{ $tabel_pesanterkirim-> penerima }}</td>
              <td>{{ $tabel_pesanterkirim-> subject}}</td>
              <td>{{ $tabel_pesanterkirim-> pesan}}</td>
              <td>{{ $tabel_pesanterkirim-> balasan_pesan}}</td>
          </tr>
          @php
          $i++;
          @endphp
          @endforeach
          
      </table>
  </div>
</div>
</div>
@endsection