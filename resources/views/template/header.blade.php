<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start --> 
						<div class="header-left">

						 

							<!-- name-and-slogan -->
							<div class="logo-section smooth-scroll">
								<div class="brand"><a href=""><b>Car Service</b> LogoIpsum</a></div>								
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start --> 
						<div class="header-right">

							<!-- main-navigation start --> 
							<div class="main-navigation animated">

								<!-- navbar start --> 
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li><a href="#banner">Beranda</a></li>
												<li><a href="#tentang">Tentang</a></li>
												<li><a href="#testimoni">Testimoni</a></li>
												@if (Session()->get('level')=='1') 

								<li class="has-dropdown"><a href=""> Halo, {{Session::get('nama_admin')}} </a>
									<ul class="dropdown">
										<li><a href="{{route('admin')}}">Dashboard</a></li>
										<li><a href="{{route('logout_admin')}}">Logout</a></li>
									</ul>
								</li>

							@elseif (Session()->get('level')=='2') 
							
								<li class="has-dropdown"><a href=""> Halo, {{Session::get('nama_user')}}</a>
									<ul class="dropdown">
										<li><a href="{{route('dashboard_user')}}">Dashboard</a></li>
										<li><a href="{{route('logout_user')}}">Logout</a></li>
									</ul>
								</li>
							 
							@else
												<li><a href="{{ route('login')}}">Masuk</a></li>
												<li><a>/</a></li>
												<li><a href="{{ route('register')}}" >Daftar</a></li>
												@endif
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>

		<!-- banner start --> 
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
						 
						<div style="margin-top: 0px; opacity: 1;" data-animation-effect="fadeIn">
								<h1>Kami adalah bengkel service terbaik!</h1>
								<h3 class="padding-top30"></h3>
								<div class="padding-top60 contact-form">
								<a href="{{route('tambah_servis')}}">
									<button class="btn cta-button">Ingin Service?</button>
									</a>
								</div>
								
				</div>
			</div>
		</div>
		<!-- banner end -->
		<section id="tentang" class="hero-caption secPadding">

		<div class="container">
	
	<div class="row " style="margin-top: 0px;">
	<div class='col-md-offset-2 col-md-8 text-center'>
				<div class="col-sm-12">
	<h2>Selamat datang di car service centre logoipsum</h2>
	<p>Bengkel ini berlokasi di jakarta. Untuk memajukan
	kinerja bengkel, kami mempekerjakan montir-montir berkualiatas yang ahli pada bidang
	mereka masing-masing. Montir kami merupakan lulusan akademi/universitas terbaik.</p>
 	</div>
	
			</div>
</div>
		</div>
	
</section>

		
 
<!-- section start --> 
		<section id="testimoni" class="default-bg secPadding">
			
<div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h2>Testimonials</h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
               
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Luar biasa servis mobil disini! Bisa selesai kurang dari 1 minggu dengan total servis lebih dari 2 item</p>
                  <small>Randy</small>
                </div>
              </div>
            </blockquote>
          </div>
          
		</section>
		<!-- section end -->
				