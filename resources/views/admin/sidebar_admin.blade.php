<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{url('avatar_admin') }}/{{$avatar->avatar_admin}}" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{session()->get('name')}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider "></div>
		<ul class="nav menu">
			<li ><a href="{{route('admin')}}"><em class="fa fa-home">&nbsp;</em> Dashboard</a></li>
			<li><a href="{{route('admin_profil')}}"><em class="fa fa-address-card">&nbsp;</em> Profil</a></li>
			<li><a href="{{route('daftar_user')}}"><em class="fa fa-users">&nbsp;</em> Pengguna</a></li>
			<li><a href="{{route('tabel_servis')}}"><em class="fa fa-file">&nbsp;</em>Servis</a></li>
			<li><a href="{{route('jadwal')}}"><em class="fa fa-calendar">&nbsp;</em> Jadwal Servis</a></li>
			<li><a href="{{route('admin_inbox')}}"><em class="fa fa-envelope">&nbsp;</em>Kotak Masuk</a></li>
			<li><a href="{{route('admin_pesanterkirim')}}"><em class="fa fa-check">&nbsp;</em>Pesan Terkirim</a></li>
			<li><a href="{{route('logout_admin')}}"><em class="fa fa-times">&nbsp;</em> Keluar</a></li>
		</ul>
	</div>