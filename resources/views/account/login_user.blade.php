<!DOCTYPE html>

    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Halaman Masuk Pengguna</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="{{url('assets/login/css/demo.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('assets/login/css/style3.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{url('assets/login/css/animate-custom.css')}}" />
    </head>

     <body>
        <header>
                <h1>Halaman Masuk Pengguna <span>Servis Mobil</span></h1>
            </header>
            <section>               
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="POST" action="{{ route('login')}}" autocomplete="on"> 
                                {{ csrf_field()}}
                                <h1>Masuk</h1> 
                                <p>
                                    anda Admin ?
                                    <a href="{{ route('login_admin')}}" class="to_register">Login Disini</a>
                                </p>
                                <p>
                                Kembali ke halaman website
                                    <a href="{{ route('home')}}" class="to_register">Klik Disini</a>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Username </label>
                                    <input id="name" name="name" required="required" type="text" placeholder="Isi dengan username anda"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="si dengan password anda" /> 
                                </p>
                                <p class="keeplogin"> 
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                    <label for="loginkeeping">Keep me logged in</label>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Masuk" /> 
                                </p>

                                

                                <p class="change_link">
                                    Belum jadi member ?
                                    <a href="{{ route('register')}}" class="to_register">Daftar Sekarang</a>
                                </p>
                            </form>
                        </div>
