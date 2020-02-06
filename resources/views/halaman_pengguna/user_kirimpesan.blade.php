@extends('users.user')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{url('assets/inbox/css/main.css')}}">
    
<div class="container-contact100">
        <form class="contact100-form validate-form" method="POST" action="{{route('user_kirimpesan')}}">
            <span class="contact100-form-title">
                Membuat Pesan
            </span>
            {{csrf_field()}}
            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Pengirim</span>
                <input class="input100" name="pengirim" value="{{session()->get('name')}}">
                <span class="focus-input100"></span>
            </div>

            @foreach ($user_kirimpesan as $user_kirimpesan)
            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Penerima</span>
                <input class="input100" type="text" name="penerima" value="{{$user_kirimpesan-> name}}"> 
                <span class="focus-input100"></span>
            </div>
            @endforeach
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Subjek</span>
                <input class="input100" type="text" name="subject" placeholder="Isi judul pesan">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Message is required">
                <span class="label-input100">Pesan</span>
                <textarea class="input100" name="pesan" placeholder="Ketik pesan..."></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    <span>
                        Kirim Pesan
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>

    </div>
{{-- </div> --}}
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{url('assets/inbox/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	@endsection