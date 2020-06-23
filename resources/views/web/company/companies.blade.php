@extends('web.layout.master1')


@section('content')
<section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Companies</h2>
                         </div>
                    </div>

                   
                    @foreach($company as $cpm)
                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="{{route('companyDetail',['id' => encrypt($cpm->id)])}}">
                                   <img style="200px;" src="{{asset('assets/web/assets/images/1.png')}}" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   
                                   <span><b>Name:</b> {{$cpm->companyName}}</span>
                                   <span><b>Address:</b> {{$cpm->address}}</span><br>
                                   
                              </div>
                         </div>
                    </div>

                   @endforeach
                   
               </div>
               <div class="pull-right">
               {{ $company->links()}}
               <div>
          </div>
          
     </section>
    
@stop