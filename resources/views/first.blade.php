@extends('web.layout.master')


@section('content')

<section id="news" data-stellar-background-ratio="2.5">

          <div class="container">
          
          <h3 style="float:left; margin-top:-70px;">About Website</h3>
          <div class="col-md-12">
        <span style="font-size:20px; float:left;">This is site is an Online Cab Renting Website which service for the riders, drivers and companies 
        which riders can book the cab and taxi for them, first they register them for a company then the can book.
        </span>
        <br>
        <br>
        <br>
        <br>
        <span style="font-size:20px; float:left;">Drivers also can register them in a company which they like after they registerd thay have and acount 
        which on that company</span>
                </div >       
                
                



                
          </div>


          
     </section>
     

      <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img style="width:280px;" src="{{asset('assets/web/assets/images/2.png')}}" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   
                                   <h3><a href="news-detail.html">Omide Sabz Taxi Service</a></h3>
                                  
                                
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                   <img src="{{asset('assets/web/assets/images/slider2.jpg')}}" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   
                                   <h3><a href="news-detail.html">Afghanistan Taxi Service</a></h3>
                                   
                                   
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <img src="{{asset('assets/web/assets/images/1.png')}}" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   
                                   <h3><a href="news-detail.html">TamadoonTaxi Service</a></h3>
                                   
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


@stop