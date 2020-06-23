@extends('cms.sidebar3c')

@section('content')

   







<h1>Company Proflile: {{ Auth::user()->company_detail_id }}</h1>
<div class="share_detail">
         
         <div class="profile_ac_inner_det">
            <div class="profile_ac_details profile_ac_title">
               <h2>Account</h2>
            </div>
            <div class="profile_ac_form">
				<form accept-charset="UTF-8" action="http://www.zoodcars.com/site/rider/update_rider_profile" id="profile_update_form" method="post" enctype="multipart/form-data" novalidate="novalidate">                  <div class="col-lg-5 col-md-5 no_padding left">
                     <label><span class="req">* </span>EMAIL</label>
                     <div class="input_div rider_profile_name">
						
						
					<input class="form-control" type="text" name="" value=" {{ Auth::user()->email }}" readonly="readonly" class="valid">						
						
						
					</div>
                     <label><span class="req">* </span>MOBILE NUMBER </label> 
                     <div class="input_div selc">

                    <input class="form-control" type="text" name="mNumber" value=" {{ Auth::user()->phone }}" class="required phoneNumber" placeholder="Phone" readonly="readonly alphanumeric">						
					 </div>
					 
                     <label><span class="req">* </span>Firstname</label>
                     <div class="input_div">
						
						
						<input class="form-control" type="text" name="user_name" value=" {{ Auth::user()->firstname }}" id="user_name" class="required valid" placeholder="Name" minlength="2" maxlength="30">						
					</div>
					 
                     <label><span class="req">* </span>Lastnamer</label>
                     <div class="input_div">
						
						
						<input class="form-control" type="text" name="user_name" value=" {{ Auth::user()->lastname }}" id="user_name" class="required valid" placeholder="Name" minlength="2" maxlength="30">						
					</div>
					 
                     
                  </div>
                  <div class="col-lg-5 col-md-5 no_padding right">
                     <label><span class="req">*</span> OLD PASSWORD</label>
                     <div class="input_div">
						
						<input class="form-control" type="password" name="old_password" value="" id="old_password" class="pass" placeholder="At least 6 characters" minlength="6">					 
					</div>
                     <label><span class="req">*</span> NEW PASSWORD</label>
                     <div class="input _div">
					 
						<input class="form-control" type="password" name="password" value="" id="password" class="pass" placeholder="At least 6 characters" minlength="6">					</div>
                    
					<label><span class="req">*</span> CONFIRM PASSWORD</label>
                     <div class="input _div">
					 
						<input class="form-control" type="password" name="confirm_password" value="" id="confirm_password" class="pass" placeholder="At least 6 characters" minlength="6" equalto="#password">					 
					</div>
                  </div>
                
				  
                  <div class="col-lg-5 col-md-5 ">
                     <div class="profile_upload">
					 <br>
						<input class="form-control" type="file" name="image" value="" id="image" class="file file-1 media_image">					 
						<br>
                        <button type="button" class="btn btn-primary">Update Profile </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>

@endsection
