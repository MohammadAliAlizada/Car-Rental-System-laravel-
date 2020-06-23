@extends('web.layout.master1')


@section('content')
<div class="container">
    <div class="col-lg-7 col-md-7">
        <h3>{{$cpmDetail->companyName}} Company Details</h3>
            <h3>About our Company</h3>
                <h5>{{$cpmDetail->desc}}</h5> 
                <h2> Our Sevices</h2>
                <ul>
                <li>Taxi Renting</li>
                <li>Transporting services</li>
                </ul>
            <hr>
            <label style="font-size:20px;" for="">Address: </label> <span>{{$cpmDetail->address}}</span>
         

    </div>
    <div class="col-lg-4 col-md-4">
    <div class="row justify-content-center">
     
            <div class="" style="" ><br>
           <b> {{ __('Login to Book') }} </b><br><br>
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

                     <span>Login or Register as Rider</span>
                        <div class="form-group row ">
                            <div class="col-md-9">
                                <button type="submit" style="width:90px; border-radius:0px;" class="btn btn-primary ">
                                    {{ __('Login') }}
                                </button>
                                    <span style="background-color:gray;font-size:16px;
                                     padding-top:7px;padding-bottom:10px; padding-right:1px; margin-left:-5px;margin-right:-4px;">OR</span>
                                <a style=" width:90px; border-radius:0px;" class="btn btn-primary"  href="{{ route('riderregister',['id' => encrypt($cpmDetail->id)])}}">
                                    {{ __('Register') }}
                                </a>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
        <a href="{{ route('driverRegister',['id' => encrypt($cpmDetail->id)])}}" style="color:blue;">Register as Driver</a>
        <!-- <div style="margin-top:60px; " class="col-md-4" >
       <h4>Don't Have Acount</h4>
       <a href="{{ route('cpmregister') }}" class="btn btn-success" style="width:90px; border-radius:0px;" >Register</a>
       <br>
     -->
     
        </div>
        
    </div>
   
    </div>
    
</div>
<br>
    <br>
    <br>
    <br>
    <br>
    
@stop