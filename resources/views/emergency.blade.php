@extends('cms.master2')

@section('content')


<div class="share_detail">

<h1  style="margin-left:200px;">Emergency Contact</h1>

<hr  style="margin-right:200px;" >
      </div>
      <div class="share_detail">
         
         <div class="profile_ac_inner_det">
            <div class="profile_ac_details profile_ac_title">
            <h3>Enter Your Emergency Contact</h3>
            </div>
            <div class="profile_ac_form">
				<form accept-charset="UTF-8" action="http://www.zoodcars.com/site/rider/update_rider_profile" id="profile_update_form" method="post" enctype="multipart/form-data" novalidate="novalidate">                  <div class="col-lg-5 col-md-5 no_padding left">
                     <label><span class="req">* </span>Name</label>
                     <div class="input_div rider_profile_name">
						
						
                     <input class="form-control" type="password" name="old_password" value="" id="old_password" class="pass" placeholder="Enter Your Name" minlength="6">					 
						<br>
						
					</div>
                     <label><span class="req">* </span>Mobile Number </label> 
                     <div class="input_div selc">

                   <input class="form-control" type="password" name="old_password" value="" id="old_password" class="pass" placeholder="Enter PhoneNumber" minlength="6">					 
					<br>
                     </div>
					 
                  
                     
                     
                  </div>
                  <div class="col-lg-5 col-md-5 no_padding right">
                     <label><span class="req">*</span> Eamil</label>
                     <div class="input_div">
						
						<input class="form-control" type="password" name="old_password" value="" id="old_password" class="pass" placeholder="Enter Email" minlength="6">					 
					
                    
                  </div>
                
				  
                  <div class="col-lg-5 col-md-5 ">
                     <div class="profile_upload">
					 <br>
					 <br>
						
                        <button type="button" class="btn btn-primary">Update Profile </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>

@endsection
