@extends('users.user')
@section('Update')
@section('content')
<!-- general form elements disabled -->
<br>
          <div class="box box-warning ">
            <div class="box-header with-border">
              <h3 class="box-title">&nbsp;&nbsp;PROFIL PENGGUNA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-4">
              
              @foreach($user_ as $user_) 
                <form role="form" action="{{route('update_profil',session()->get('name'))}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                  <!-- text input -->
                  <div class="form-group">
                    <label>ID Pengguna</label>
                    <input type="text" name ="name" class="form-control" placeholder="Enter ..." value="{{session()->get('name')}}">
                  </div>

                  <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text"name ="nama_user" class="form-control" placeholder="Masukkan Nama Anda ..." value="{{$user_->nama_user}}">
                  </div>
            
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter ..." value="{{session()->get('email')}}">
                   
                  </div>
                  <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Masukkan No Telepon....." value="{{$user_->telepon}}" >
                  </div>
            
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea type="textarea" name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat Anda..."  >{{$user_->alamat}}</textarea>
                  </div>

                  <div class="form-group">
                      <label>Avatar</label>
                      <br>
                      <input 
                      type="file" class="form-control-file" name="avatar" >{{$user_->avatar}}
                  </div>
            
                  <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
              </div>
                @endforeach
            
            </div>
          @endsection