
@extends('admin.admin')
@section('content')
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">PENGGUNA TERDAFTAR</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table" >
              	<tr class="tbl-green" align="justify">
                  <td>No</td>
                  <td>Username</td>
              		<td>Nama Lengkap</td>
                  <td>Email</td>
              	</tr>
              	@php
              	$i = 1;
              	@endphp 
              	@foreach ($tampiluser as $tampiluser)
              	<tr class="tbl-green1" align="justify">
                  <td>{{ $i}}</td>
                  <td>{{$tampiluser->name}}
              		<td>{{ $tampiluser->nama_user }}</td>
                  <td>{{ $tampiluser->email }}</td>
              	</tr>
              	@php
              	$i++;
              	@endphp
              	@endforeach
              </table>
          </div>
  @endsection