@extends('layouts.app2')

@section('content') 
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="" style="border-right:1px solid #ebebeb;" >
           <b> {{ __('Login as Rider') }} </b>
                <div class="card-header" style=""></div>
               
                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                           <label style="margin-left:14px;" for="">Email</label>
                            <div class="col-md-11">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="margin-left:14px;">Password</label>

                            <div class="col-md-11">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     
                        <div class="form-group row ">
                            <div class="col-md-9">
                                <button type="submit" style="width:90px; border-radius:0px;" class="btn btn-primary ">
                                    {{ __('Login') }}
                                </button>

                                <a style="float:right; color:blue;"  href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
