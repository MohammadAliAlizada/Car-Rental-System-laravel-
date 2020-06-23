@extends('cms.master')

@section('content')
<div class="container col-md-10 col-sm-5">
  <h1>Company Details</h1>
  <div class="share_detail">
         
         <div class="profile_ac_inner_det">
            <div class="profile_ac_details profile_ac_title">
               <h2>Account</h2>
            </div>
            <div class="profile_ac_form">
            <form  class="form-horizontal form-groups-bordered" action="{{route('savecompany')}}"  method="POST" enctype="multipart/form-data">
				
        {{csrf_field()}}
                    
        <div class="form-group">								
          <div class="col-sm-5 col-md-12 col-lg-12">
          
            <div>
              <div >
              <label><span class="req">* </span>User ID</label>
                <input type="text" class="form-control" placeholder="Title" name="user_id">
                <span class="input-group-addon"><i class="entypo-info"></i></span>

              </div>


            <div>
            <label><span class="req">* </span>Company Name</label>
                <input type="text" class="form-control" placeholder="Title" name="companyName">
                <span class="input-group-addon"><i class="entypo-info"></i></span>

            </div>


      <div>
            <label><span class="req">* </span>Description</label>
                <input type="text" class="form-control" placeholder="Title" name="desc">
                <span class="input-group-addon"><i class="entypo-info"></i></span>

            </div>

<div>
            <label><span class="req">*Address </span><Address></Address></label>
                <input type="text" class="form-control" placeholder="Title" name="address">
                <span class="input-group-addon"><i class="entypo-info"></i></span>

            </div>
<br>
        <button class="btn btn-primary" type="submit">Create Post</button>
        
      
      </form>
            </div>
         </div>
      </div>

</div>
@endsection

