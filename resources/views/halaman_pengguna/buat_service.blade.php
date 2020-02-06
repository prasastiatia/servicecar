@extends('users.user')
@section('content')
<link rel="stylesheet" type="text/css" href="{{url('assets/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/login/css/main.css')}}">

    <link rel="stylesheet" href="{{url('assets/css/jquery-ui.css')}}" type="text/css" />
<link rel="stylesheet" href="{{url('assets/css/jquery-ui.timepicker.css?v=0.3.3')}}" type="text/css" />
     
	<div class="limiter">

		
		<!-- <div class="container-login100"> -->
			<div class="wrap-login100 p-l-20 p-r-20 p-t-15 p-b-15">
					@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block" >
					  <button type="button" class="close" data-dismiss="alert">×</button> 
						<strong>{{ $message }}</strong>
					</div>
				  @endif
			  
				  @if ($message = Session::get('false'))
					<div class=" alert alert-danger alert-block">
					  <button type="button" class="close" data-dismiss="alert">×</button> 
					  <strong>{{ $message }}</strong>
					</div>
				  @endif
					
				  @if ($message = Session::get('warning'))
					<div class=" col-md-3 alert alert-warning alert-block">
					  <button type="button" class="close" data-dismiss="alert">×</button> 
					  <strong>{{ $message }}</strong>
				  </div>
				  @endif
			  
				  @if ($message = Session::get('info'))
					<div class="alert alert-info alert-block">
					  <button type="button" class="close" data-dismiss="alert">×</button> 
					  <strong>{{ $message }}</strong>
					</div>
				  @endif
		
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{route('tambah_servis')}}">
					{{ csrf_field()}}
					<span class="login100-form-title p-b-15">
						Form Jadwal
					</span>

					<span class="txt1 p-b-11">
						ID Pengguna
					</span>

					<div class="wrap-input100 validate-input m-b-15" data-validate = "Username is required">
						<input class="input100" type="text" name="name" value="{{session()->get('name')}}"  > 
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-15" data-validate = "Email is required">
						<input class="input100" type="text" name="email" value="{{session()->get('email')}}" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Jenis Servis
					</span>
					<div class="wrap-input100 validate-input m-b-15" data-validate = "Service type is required">
						 <select name="jenis_servis" id="jenis_servis" class="form-control jenis_servis">
						 	<option value="0" selected="true">Pilih Jenis Servis</option>
						@foreach ($jenis_servis as $data)
	  						<option value="{{ $data->jenis_servis}}">{{ $data->jenis_servis }}</option>
						@endforeach
 						 </select>

						<span class="focus-input100"></span>
					</div>

					<div id = "pilih_harga">

					<span class="txt1 p-b-11">
						Harga
					</span>

					<div class="wrap-input100 validate-input m-b-15" data-validate = "Username is required">
						<input class="input100 harga" type="text" id="harga" name="harga" value=""  >
						<span class="focus-input100"></span>
					</div>
					</div>

					<span class="txt1 p-b-11">
						Montir
					</span>
					<div class="wrap-input100 validate-input m-b-15" data-validate = "Montir is required">
						<select class=" form-control" name="montir">
                                            <option>Pilih Montir</option>
                                            <option value="Dendi">Dendi</option>
                                            <option value="Dwi">Dwi</option>
                                            <option value="Fajar">Fajar</option>
                                        </select>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Tanggal 
					</span>
					<div class="wrap-input100 validate-input m-b-15" data-validate = "Date is required">
						<input class="input100" id="datepicker" type="text"  name="tanggal_pesan">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn tambah_servis" id="tambah_servis" name="tambah_servis" value="tambah_servis">
							 Tambah Service
						</button>
					</div>

				</form>
			</div>
	</div>

	


@endsection