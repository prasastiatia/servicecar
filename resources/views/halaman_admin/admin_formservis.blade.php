@extends('admin.admin')
@section('content')

		<div class="box-header with-border">
		  <h2>Form Servis</h2>
		</div>

<div class="limiter">
		
	
		<div class="box-body col-md-4">
		<form enctype="multipart/form-data" action="{{route('form_servis')}}" method="post">
			{{ csrf_field() }}

				<div class="form-group">
				  <label >Jenis Servis</label>
				  <input type="text" class="form-control" name="jenis_servis" placeholder="Masukkan Jenis Servis">
				</div>

				<div class="form-group ">
				  <label >Harga</label>
				  <input class="form-control" name="harga" placeholder="Masukkan Harga">
				</div>
				<button type="submit" class="btn btn-primary">Tambah Servis</button>
			  </form>
</div>
@endsection