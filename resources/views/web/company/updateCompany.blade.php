@extends('cms.sidebar2')

@section('content')
<div class="container col-md-10 col-sm-5">
  <h1>Lists of Companies</h1>
 
  <div class="share_detail">
         
         <div class="profile_ac_inner_det">
            <div class="profile_ac_details profile_ac_title">
               <h2>Account</h2>
            </div>
            <div class="profile_ac_form">
				<form method="post" enctype="multipart/form-data" >                 
                 <div class="col-lg-8 col-md-8 no_padding left">
                     <label><span class="req">* </span>Company Id</label>
                     <div class="input_div rider_profile_name">
						
						
                        <input class="form-control" type="text" name="" value="{{$company->id}} "  class="valid">						
						
						
					</div>
                     <label><span class="req">* </span>First Name </label> 
                     <div class="input_div selc">

                    <input class="form-control" type="text" name="mNumber" value="{{$company->firstname}}  " class="required phoneNumber" placeholder="Phone" >						
					 </div>
					 
                     <label><span class="req">* </span>last Name</label>
                     <div class="input_div">
						
						
						<input class="form-control" type="text" name="user_name" value="{{$company->lastname}} " id="user_name" class="required valid" placeholder="Name" minlength="2" maxlength="30">						
					</div>
					 
                     <label><span class="req">* </span>Email Address</label>
                     <div class="input_div">
						
						
						<input class="form-control" type="text" name="user_name" value="{{$company->email}}" id="user_name" class="required valid" placeholder="Name" minlength="2" maxlength="30">						
					</div>
                     <label><span class="req">* </span>PhoneNumber</label>
                     <div class="input_div">
						
						
						<input class="form-control" type="text" name="user_name" value="{{$company->phone}}" id="user_name" class="required valid" placeholder="Name" minlength="2" maxlength="30">						
					</div>
					 <br>
                    <button type="button" class="btn btn-primary">Update Profile </button>
                  </div>
                  
                
				  
                  
                        
                   
               </form>
            </div>
         </div>
      </div>

</div>

<!-- Large modal -->


</div>
@endsection
