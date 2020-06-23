@extends('cms.master3')

@section('content')
<h3>Propertis of Ride </h3>

<div class="container col-md-10 col-sm-5">
  <div class="share_detail">
         
         <div class="profile_ac_inner_det">
            <div class="profile_ac_form">
            <form  class="form-horizontal form-groups-bordered" action="{{route('savecompany')}}"  method="POST" enctype="multipart/form-data">
				
        {{csrf_field()}}
                    
        <div class="form-group">								
          <div class="col-sm-5 col-md-12 col-lg-12">
          
            <div>
              <div >
              <label><span class="req">* </span>Rider ID</label>
                <input type="text" class="form-control" placeholder="Title" value="{{$accept->user_id}}" name="user_id">
                <span class="input-group-addon"><i class="entypo-info"></i></span>

              </div>


            <div>
            <label><span class="req">* </span>Pick UP</label>
                <input type="text" class="form-control" value="{{$accept->pick_up}}" placeholder="Title" name="companyName">
                <span class="input-group-addon"><i class="entypo-info"></i></span>

            </div>


      <div>
            <label><span class="req">* </span>Drop UP</label>
                <input type="text" class="form-control" value="{{$accept->drop_up}}" placeholder="Title" name="desc">
                <span class="input-group-addon"><i class="entypo-info"></i></span>

            </div>

<div>
            <label><span class="req">*Driver Name </span><Address></Address></label>
                <input type="text" class="form-control" value="{{Auth::user()->email}}" placeholder="Title" name="address">
                <span class="input-group-addon"><i class="entypo-info"></i></span>

            </div>
<br>
        <button class="btn btn-primary" type="submit">Accept</button>
        
      
      </form>
            </div>
         </div>
      </div>

</div>

@endsection
