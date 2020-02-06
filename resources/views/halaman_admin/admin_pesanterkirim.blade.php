@extends('admin.admin')
@section('content')

<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">TABEL PESAN TERKIRIM ADMIN</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
      <table class="table" >
          
          <tr class="tbl-green" align="justify">
              <th>No</th>
              <th>Pengirim</th>
              <th>Penerima</th>
              <th>Subject</th>
              <th>Pesan</th>
              <th>Balasan Pesan</th>
              
          </tr>

          @php
          $i = 1;
          @endphp 
          @foreach ($admin_balaspesan as $tabel_pesanterkirim)
          <tr class="tbl-green1" align="justify">
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

