<div class="container form_balas_pesan">
<form>
    <div class="form-row">

        <div class="wrap-input100 rs1-wrap-input100 validate-input col-md-6">
            <span class="label-input100">Pengirim</span>
            {!! Form::text('penerima',null,['class'=>'input100', 'value'=>"{{session()->get('name')]}}"]) !!}
            {{-- <input class="input100" name="pengirim" value="{{session()->get('name')}}"> --}}
            <span class="focus-input100"></span>
        </div>
        
        {{-- {{route('out.edit')->with('@foreach($inbox as $admin_balaspesan)')}}; --}}
        <div class="wrap-input100 rs1-wrap-input100 validate-input col-md-6">
            <span class="label-input100">Penerima</span>
            {!! Form::text('pengirim',null,['class'=>'input100' ]) !!}
            {{-- <input class="input100" type="text" name="penerima" value="{{$admin_balaspesan-> pengirim}}">  --}}
            <span class="focus-input100"></span>
        </div>
    </div>

    <div class="form-row">
        <div class="wrap-input100 rs1-wrap-input100 validate-input subject col-md-6" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Subject</span>
            {!! Form::text('subject',null,['class'=>'input100', 'rows' => 2,'cols'=>20 ]) !!}
            {{-- <input class="input100" type="text" name="subject" value="{{$admin_balaspesan-> subject}}"> --}}
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input pesan col-md-6" data-validate = "Message is required">
            <span class="label-input100">Pesan</span>
            {!! Form::textarea('pesan',null,['class'=>'input100','rows' => 1,'cols'=>20 ]) !!}
            {{-- <textarea class="input100" name="pesan" value="{{$admin_balaspesan-> pesan}}"></textarea> --}}
            <span class="focus-input100"></span>
        </div>
    </div>

{{-- {{route('out.edit',$admin_balaspesan->id)->with('@endforeach')}} --}}
<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Message is required">
    <span class="label-input100">Balas Pesan</span>
    {!! Form::textarea('balasan_pesan',null,['class'=>'input100', 'rows' => 2,'cols'=>20 ]) !!}
    {{-- <textarea class="input100" name="balasan_pesan" ></textarea> --}}
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
<br>
</form>
</div>
