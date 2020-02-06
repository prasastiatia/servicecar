@extends('admin.admin')
@section('content')
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
			<div class="row">
				<div class="col-xs-6 col-md-4 col-lg-4">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-address-card color-black"></em>
							<div class="large">1</div>
							<div class="text-muted">Profile</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4">
					<div class="panel panel-pink panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-file color-black"></em>
							<div class="large">{{$jml_servis}}</div>
							<div class="text-muted">Servis</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4">
					<div class="panel panel-tosca panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-black"></em>
							<div class="large">{{$jml_user}}</div>
							<div class="text-muted">Pengguna</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4">
					<div class="panel panel-orange panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-calendar color-black"></em>
							<div class="large">{{$jml_jadwal}}</div>
							<div class="text-muted">Jadwal</div>
						</div>
					</div>
				</div>

				<div class="col-xs-6 col-md-4 col-lg-4">
					<div class="panel panel-red panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-envelope color-black"></em>
							<div class="large">{{$jml_inbox}}</div>
							<div class="text-muted">Kotak Masuk</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4">
					<div class="panel panel-purple panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check color-black"></em>
							<div class="large">{{$jml_outbox}}</div>
							<div class="text-muted">Pesan Terkirim</div>
						</div>
					</div>
				</div>
				
			</div>
		
		@endsection