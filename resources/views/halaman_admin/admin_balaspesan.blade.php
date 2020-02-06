@extends('admin.admin')
@section('Update')
@section('content')

{{-- <link rel="stylesheet" type="text/css" href="{{url('assets/inbox/css/util.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{url('assets/inbox/css/main.css')}}">

<div class="limiter">
<div class="wrap-login100 p-l-20 p-r-20 p-t-15 p-b-15">
{{-- <div class="container-contact100"> --}}
        {{-- <form class="contact100-form validate-form" method="POST" action="{{route('out.store')}}"> --}}
            <span class="contact100-form-title">
                Balas Pesan
            </span>
            
            {!! Form::model($admin_balaspesan, array('action'=>'Jadwal@store'))!!}
            @include('halaman_admin.form_balaspesan')
            {!! Form::close() !!}
    </div>
@endsection