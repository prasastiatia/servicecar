@extends('admin.admin')
@section('content')
<div class="panel-heading">PROFIL ADMIN</div>
<div class="panel-body">
	<div class="col-md-4">
              @foreach($admin as $admin)
              <form role="form" action="{{route('update_profiladmin',session()->get('id'))}}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                <!-- text input -->
                <div class="form-group">
                  <label>ID Admin</label>
                  <input type="text" name="name" class="form-control" value="{{session()->get('name')}}" disabled="">
                </div>
                <div class="form-group">
                  <label>Nama Admin</label>
                  <input type="text" name="nama_admin" class="form-control" value="{{session()->get('nama_admin')}}">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" rows="3" value="{{session()->get('email')}}">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="telepon" class="form-control" rows="3" value="{{session()->get('telepon')}}">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea type = "text" class="form-control" name="alamat" rows="3">{{$admin->alamat}}</textarea>
                </div>

                <div class="form-group">
                  <label>Avatar Admin</label>
                  <br>
                  <input type="file" class="form-control-file" name="avatar_admin" >{{$admin->avatar_admin}}
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                @endforeach
            

@endsection