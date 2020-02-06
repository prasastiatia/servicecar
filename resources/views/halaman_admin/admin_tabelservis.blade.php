@extends('admin.admin')
@section('content')
<br>
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">TABEL SERVIS</h3>
    </div>
    <br>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table  " >
          <tr class="tbl-green" align="center">
              <th>No</th>
              <th>Jenis Servis</th>
              <th>Harga</th>
          </tr>
          
          @php
          $i = 1;
          @endphp 
          @foreach ($tabel_servis as $ts)
          <tr class="tbl-green1" align="justify">
              <td>{{ $i}}</td>
              <td>{{ $ts-> jenis_servis }}</td>
              <td>{{ $ts-> harga }}</td>
          </tr>
          @php
          $i++;
          @endphp
          @endforeach
          
          <button class="btn btn-hijau" onclick="window.location.href='{{route('form_servis')}}'"> Tambah Data </button>
     <br><br> </table>
  </div>
</div>
@endsection