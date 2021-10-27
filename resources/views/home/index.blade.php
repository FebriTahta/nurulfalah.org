@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/card_hover.css')}}">
{{-- slider ga dipakai --}}
@endsection

@include('layouts.slider')

@section('content')
<!-- Flickity HTML init -->
{{-- <div id="cards_landscape_wrap-2" style="background-color: #ffffff">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6 ">
                <a href="#menu">
                    <div class="card-flyer" >
                        <div class="text-box">
                            <div class="image-box">
                                <img src="{{asset('img/menu.PNG')}}" alt="">
                            </div>
                        </div>
                    </div>    
                </a>
            </div>
            <div class="col-lg-3 col-6 ">
                <a href="#menu">
                    <div class="card-flyer" >
                        <div class="text-box">
                            <div class="image-box">
                                <img src="{{asset('img/menu.PNG')}}" alt="">
                            </div>
                        </div>
                    </div>    
                </a>
            </div>
            <div class="col-lg-3 col-6" >
                <a href="#menu">
                    <div class="card-flyer" >
                        <div class="text-box">
                            <div class="image-box">
                                <img src="{{asset('img/menu.PNG')}}" alt="">
                            </div>
                        </div>
                    </div>    
                </a>
            </div>
            <div class="col-lg-3 col-6" >
                <a href="#y">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="{{asset('img/menu.PNG')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div id="cards_landscape_wrap-2" style="background-color: #ffffff">
    <div class="container" >
        <div class="row">
            <div class="col-lg-3 col-3" >
                <a href="#y">
                    <div class="card-flyer" >
                        <div class="text-box">
                            <div class="image-box">
                                <img src="https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Title 01</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-3">
                <a href="#y">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="https://cdn.pixabay.com/photo/2018/04/06/13/46/poly-3295856_960_720.png" alt="" />
                            </div>
                            <div class="text-container">                                    
                                <h6>Title 02</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <a href="#y">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="https://cdn.pixabay.com/photo/2018/04/06/13/46/poly-3295856_960_720.png" alt="" />
                            </div>

                            <div class="text-container">
                                <h6>Title 03</h6>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <a href="#y">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="https://cdn.pixabay.com/photo/2018/03/30/15/12/dog-3275593_960_720.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Title 04</h6>
                               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> --}}

<section id="bannerLayout2" class="banner banner-layout2 pb-130">
    <div class="bg-img"><img src="assets/images/backgrounds/pattern/1.png" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="banner__content">
            <div class="banner__content-text" data-aos="fade-left">
              <div class="banner__content-text-inner">
                <div class="heading mb-40">
                  <span class="heading__subtitle">A Warm, Charming Atmosphere</span>
                  <h2 class="heading__title">Private Dining & Events</h2>
                  <div class="heading__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                      <path
                        d="M515,925a10,10,0,1,0,10,10A10.011,10.011,0,0,0,515,925Zm7,13.865a2.568,2.568,0,0,1-.651-0.549,3.235,3.235,0,0,0-5.209,0,1.449,1.449,0,0,1-1.146.683,1.419,1.419,0,0,1-1.2-.695,3.2,3.2,0,0,0-2.548-1.3,3.345,3.345,0,0,0-2.605,1.316,2.625,2.625,0,0,1-.64.544,7.953,7.953,0,0,1-.928-2.86h15.862A7.926,7.926,0,0,1,522,938.863ZM507.069,934a7.948,7.948,0,0,1,.928-2.859,2.617,2.617,0,0,1,.64.543A3.345,3.345,0,0,0,511.242,933a3.2,3.2,0,0,0,2.548-1.3,1.423,1.423,0,0,1,1.2-.7,1.452,1.452,0,0,1,1.146.685,3.237,3.237,0,0,0,5.209,0,2.575,2.575,0,0,1,.651-0.55,7.939,7.939,0,0,1,.932,2.865H507.069ZM515,927a7.975,7.975,0,0,1,5.8,2.509,5.325,5.325,0,0,0-.914.806,1.3,1.3,0,0,1-2.292,0,3.287,3.287,0,0,0-5.289.035,1.286,1.286,0,0,1-1.066.648,1.452,1.452,0,0,1-1.145-.683,5.348,5.348,0,0,0-.9-0.8A7.972,7.972,0,0,1,515,927Zm0,16a7.97,7.97,0,0,1-5.808-2.516,5.3,5.3,0,0,0,.9-0.8,1.452,1.452,0,0,1,1.145-.685,1.288,1.288,0,0,1,1.066.649,3.288,3.288,0,0,0,5.289.036,1.3,1.3,0,0,1,2.292,0,5.241,5.241,0,0,0,.914.806A7.972,7.972,0,0,1,515,943Z"
                        transform="translate(-505 -925)"></path>
                    </svg>
                  </div>
                  <p class="heading__desc">Allow us to make your next special event extra special. We cater for all
                    sized functions, ideal for your larger functions or an intimate gathering, our team can curate a
                    menu to suit your taste.</p>
                </div><!-- /.heading -->
                <a href="#" class="btn btn__secondary btn__link mx-2 my-1">Explore Events</a>
                <a href="#" class="btn btn__primary mx-2 my-1">Explore Events</a>
              </div><!-- /.banner__content-text-inner -->
            </div><!-- /.banner__content-text -->
            <div class="banner__content-img" data-aos="fade-right">
              <img src="assets/images/banners/2.png" alt="banner">
            </div><!-- /.banner__content-img -->
          </div><!-- /.banner__content -->
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.Banner layout1 -->
@endsection

@section('script')

@endsection