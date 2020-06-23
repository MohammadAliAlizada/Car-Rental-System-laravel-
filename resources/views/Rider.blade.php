@extends('cms.master2')

@section('content')

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class=""  >
          <h1>Book Ride</h1>
                <div class="card-header" style=""></div>
               
                <div class="card-body" >
                    <form >
                       

                        <div class="form-group row">
                          
                            <div class="col-md-11">
                            <input id="name" type="hidden" readonly="readonly" class="form-control{{ $errors->has('company_detail_id') ? ' is-invalid' : '' }}" name="user_id" value="{{Auth::user()->id}} " required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          
                            <div class="col-md-11">
                            <input id="name" type="hidden" readonly="readonly" class="form-control{{ $errors->has('company_detail_id') ? ' is-invalid' : '' }}" name="company_detail_id" value="{{Auth::user()->company_detail_id}}" required autofocus>
                          </div>
                        </div>
                        

                          <div class="form-group row">
                           <label style="margin-left:14px;" for="">Pick Up</label>
                            <div class="col-md-11">
                                <input  type="text" class="form-control" name="pick_up" placeholder="Pick Up Location" value="{{ old('puck_up') }}" required autofocus>
                                   
                            </div>
                        </div>
                        
                        

                       
                       <div class="form-group row">
                            <label style="margin-left:14px;">Drop Up</label>

                            <div class="col-md-11">
                                <input  type="text" placeholder="Drop Up Location" class="form-control" name="drop_up" value="{{ old('drop_up') }}" required>
                                
                            </div>
                        </div>

                       
                       <div class="form-group row">
                           

                            <div class="col-md-11">

                                   <label style="margin-left:14px;">BOOK</label>
                            
                                <select name="" id="" class="form-control">
                                <option value="" class="form-control">Book Now</option>
                                <option value="" class="form-control">Book Leter</option>
                                </select>
                            </div>
                        </div>


              


                     <div class="form-group row">
                      
                     <label style="margin-left:14px;">Car Type</label>

                         <div class="col-md-11">
                         <select name="" id="" class="form-control">
                                <option value="" class="form-control">Corola</option>
                                <option value="" class="form-control">Taxi</option>
                                </select>
                                 </div>
                     </div>

                     
                        <div class="form-group row ">
                            <div class="col-md-9">
                                <button type="submit"
                                class="btn btn-primary btn-sm" 
                                data-toggle="modal" 
                                data-target="#favoritesModal" style="width:90px; border-radius:0px;" class="btn btn-primary ">
                                    {{ __('Book Now') }}
                                    
                                </button>


                                <div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
        <p>
        Calling.......
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" 
           class="btn btn-primary" 
           data-dismiss="modal">OK</button>
        <span class="pull-right">
          
        </span>
      </div>
    </div>
  </div>
</div>




                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

   <div class="col-md-6">
            <div class=""  >
          
                <div class="card-header" style=""></div>
               
                <div class="card-body" >
                <img style="width:1000px;" src="{{asset('assets/web/assets/images/6.png')}}" class="img-responsive" alt="">
                </div>
            </div>
        </div>




        </div>
    </div>
</div>

@endsection
