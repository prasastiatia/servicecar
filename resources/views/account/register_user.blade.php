<!DOCTYPE html>

    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Halaman Daftar Pengguna</title>
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
                <h1>Halaman Daftar Pengguna <span>Servis Mobil</span></h1>
            </header>
            <section>               
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="POST" action="{{ route('register')}}" autocomplete="on"> 
                                {{ csrf_field() }}
                                <h1>Daftar</h1> 
                                <p>
                                    Kembali ke halaman website
                                    <a href="{{ route('home')}}" class="to_register">Klik Disini</a>
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Username </label>
                                    <input id="name" class="form-control" name="username" required="required" type="text" placeholder="Isi dengan username anda"/>
                                </p>

                                <p> 
                                    <label for="email" class="youmail" data-icon="e" > Email </label>
                                    <input id="email" class="form-control" name="useremail" required="required" type="email" placeholder="Isi dengan email anda"/>
                                </p>

                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" class="form-control" name="userpassword" required="required" type="password" placeholder="Isi dengan password anda" /> 
                                </p>

                                  <p class="login button"> 
                                    <input type="submit" value="Daftar" /> 
                                </p>
                                <p class="change_link">
                                    <a href="{{ route('login')}}" class="to_register">Kembali Ke halaman masuk</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </section>
            </body>
    </html>
