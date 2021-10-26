@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/card_hover.css')}}">
{{-- slider ga dipakai --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
@endsection

@include('layouts.slider')

@section('content')
{{-- <div class="container margin_60_35 text-center">
    <div class="row">
        <div class="col-sm-3 col-xs-6">
            <img src="{{asset('img/bidang.png')}}" style="width: 100px; max-width: 100%" alt="">
            <br><p><label for="">BIDANG</label></p>
        </div>
        <div class="col-sm-3 col-xs-6">
            <img src="{{asset('img/event.png')}}" style="width: 100px; max-width: 100%" alt="">
            <br><p><label for="">EVENT</label></p>
        </div>
        <div class="col-sm-3 col-xs-6">
            <img src="{{asset('img/product.png')}}" style="width: 100px; max-width: 100%" alt="">
            <br><p><label for="">PRODUK</label></p>
        </div>
        <div class="col-sm-3 col-xs-6">
            <img src="{{asset('img/media.png')}}" style="width: 100px; max-width: 100%" alt="">
            <p><label for="">MEDIA</label></p>
        </div>
    </div>    
</div><!-- End container --> --}}
<!-- Flickity HTML init -->
{{-- <div class="menu">
    <div class=" text-center" style="background-color: #F7F7F7">
        <div id="single_room_feat">
            <ul>
                <li><i class="icon_set_1_icon-27" style="margin-top: 20px"></i>Program</li>
                <li><i class="icon_set_1_icon-95" style="margin-top: 20px"></i>Product</li>
                <li><i class="icon_set_1_icon-94" style="margin-top: 20px"></i>Artikel</li>
                <li><i class="icon_set_1_icon-100" style="margin-top: 20px"></i>Berita</li>
            </ul>
        </div>
    </div>
</div> --}}
<div id="cards_landscape_wrap-2" style="background-color: #ffffff">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-lg-3 col-3 ">
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
            <div class="col-xs-6 col-lg-3 col-3 ">
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
            <div class="col-xs-6 col-lg-3 col-3" >
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
            <div class="col-xs-6 col-lg-3 col-3" >
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
</div>
<div id="cards_landscape_wrap-2" style="background-color: #ffffff">
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
</div>
@endsection

@section('script')

@endsection