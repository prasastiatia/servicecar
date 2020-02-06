<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{url('assets/users/theme-assets/images/backgrounds/02.jpg')}}">

       <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="#"><img class="brand-logo" alt="Chameleon admin logo" src="{{url('avatar_user/logoo1.png')}}"/>
              <h3 class="brand-text">Hai,{{Session()->get('name')}}</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li ><a href="{{route('dashboard_user')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">&nbsp;Beranda</span></a>
          </li>
          <li class=" nav-item"><a href="{{route('user_profil')}}"><i class="ft-edit"></i><span class="menu-title" data-i18n="">&nbsp;Akun Pengguna</span></a>
          </li>
          <li class=" nav-item"><a href="{{route('tabel_jadwaluser')}}"><i class="ft-settings"></i><span class="menu-title" data-i18n="">&nbsp;Servis Mobil</span></a>
          </li>
          <li class=" nav-item"><a href="{{route('tabel_inbox')}}"><i class="ft-mail"></i><span class="menu-title" data-i18n="">&nbsp;Kotak Masuk</span></a>
          </li>
          <li class=" nav-item"><a href="{{route('tabel_pesanterkirim')}}"><i class="ft-check"></i><span class="menu-title" data-i18n="">&nbsp;Pesan Terkirim</span></a>
          </li>
          </li>
          <li class=" nav-item"><a href="{{route('logout_user')}}"><i class="ft-log-out"></i><span class="menu-title" data-i18n="">&nbsp;Keluar</span></a>
          </li>
            </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    