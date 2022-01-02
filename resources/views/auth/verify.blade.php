@extends('layouts.app')

@section('css')
    <style>
        .verify-inputs {
            direction: ltr;
        }
        .verify-inputs input {
            text-align: center;
        }
        .resend{
            cursor:pointer;
        }
    </style>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $(".inputs").keyup(function () {
                if (this.value.length == this.maxLength) {
                    $(this).next('.inputs').focus();
                }
            });
            var counter=$('.counter').text();
            interval();
            function interval() {
               var x= setInterval(function () {
                    console.log('satt');
                    var timer = counter.split(':');
                    //by parsing integer, I avoid all extra string processing
                    var minutes = '00';
                    var seconds = parseInt(timer[1], 10);
                    --seconds;
                    if (seconds <= 0) {
                        clearInterval(x);
                        show_send_code();
                    }
                    seconds = (seconds <= 0) ? '53' : seconds;
                    seconds = (seconds < 10) ? '0' + seconds : seconds;
                    //minutes = (minutes < 10) ?  minutes : minutes;
                    $('.counter').html(minutes + ':' + seconds);
                    counter = minutes + ':' + seconds;
                }, 1000);
            }
            function show_send_code (){
                $('.counter').remove();
                $('.timer-dev').empty().addClass('resend').text('{{__('website.ReSend Code')}}');
            }

            $(document).delegate('.resend','click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }

                });
                var email ='{{$find_user_mobile->email}}';

                $.ajax({
                    type: "POST",
                    url: "{{route('resend')}}",
                    data: {email: email},
                    dataType: "json",
                    success: function (data) {
                        if (data.status === 1) {
                            $('.timer-dev').empty().removeClass('resend').text('{{__('website.Resend activation code after')}}').append(' <span class="text-danger counter">00:53</span>');
                            counter='00:53';
                            interval();
                        } else {
                            $('.verify-inputs').before().append('<div class="alert alert-danger">'+data.message+'</div>')

                        }
                    },
                    error: function (data) {
                        if (data.responseJSON.errors) {
                            $.each(data.responseJSON.errors, function (index, value) {
                                console.log(index);
                                console.log(value);
                            });

                        }
                    },
                    complete: function () {
                        //do nothing
                    }
                });

            });
            $('.verify').click(function(){
                $('.alert').remove();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }

                });
                const  email ='{{$find_user_mobile->email}}';
                var code ='';
                $('.inputs').each(function(){
                    code +=$(this).val();
                });

                $.ajax({
                    type: "POST",
                    url: "{{route('verify')}}",
                    data: {email: email,code:code},
                    dataType: "json",
                    success: function (data) {
                        if (data.status === 1) {
                            window.location.href=data.route;
                        } else {
                            if(data.errors && data.errors.length > 0){
                                var html='';
                                html +=  '<div class="alert alert-danger">'+data.message+'<ul>';
                                $.each(data.errors,function (index,value){
                                    html+='<li>'+value+'</li>';
                                });
                                html +='</ul></div>'
                                 $('.verify-inputs').before(html);
                            }else {
                                $('.verify-inputs').before('<div class="alert alert-danger">'+data.message+'</div>');

                            }

                        }
                    },
                    error: function (data) {
                        if (data.responseJSON.errors) {
                            $.each(data.responseJSON.errors, function (index, value) {
                                console.log(index);
                                console.log(value);
                            });

                        }
                    },
                    complete: function () {
                        //do nothing
                    }
                });

            });
        });

    </script>
@endsection
@section('content')
    <div class="register-wrap">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="py-5">
                    <div class="d-flex justify-content-between">
                        <div class="w-85">
                            <h2>{{__('website.Start with Tajarob')}}</h2>
                        </div>
                        <span>1/{{$find_user_mobile->hasRole('user')?2:3}}</span>
                    </div>

                    <p class="mb-4 have-account">{{__('website.Do have account?')}} <a href="{{route('login')}}">{{__('website.Login')}}</a> </p>

                    <form action="" class="w-85">
                        <div class="form-group verify-group">
                            <p>{{__('website.The activation code has been sent via email')}}
                                <a class="text-dark" href="#">{{$find_user_mobile->email}}</a></p>
                            @include('website.partials.validationMessages')

                            <div class="d-flex verify-inputs mb-3">
                                <input class="inputs" type="text" minlength="1" maxlength="1" name=""/>
                                <input class="inputs" type="text" minlength="1" maxlength="1"  name=""/>
                                <input class="inputs" type="text" minlength="1" maxlength="1"  name=""/>
                                <input class="inputs" type="text" minlength="1" maxlength="1"  name=""/>
                            </div>
                            <p class="timer-dev">{{__('website.Resend activation code after')}} <span class="text-danger counter">00:53</span></p>
                            <button type="button" class="btn btn-danger btn-block mb-5 verify">
                                {{__('website.verify')}}
                            </button>
                            <div class="text-center back-reg">
                                <a class="text-gray" href="{{route('register')}}">{{__('website.Back to register')}}</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
