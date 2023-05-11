@extends('user.layouts.main')
@section('content')

<!--slider area start-->
<section class="slider_section d-flex align-items-center" data-bgimg="{{asset('user/assets/img/slider/slider3.jpg')}}">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Next level of Drone</h1>
                            <h2>Insane Quality for use</h2>
                            <p>Special offer <span> 20% off </span> this week</p>
                            <a class="button" href="product-details.html">Buy now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="{{asset('user/assets/img/product/1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Best Camera Included</h1>
                            <h2>100% Flexible</h2>
                            <p>exclusive offer <span> 20% off </span> this week</p>
                            <a class="button" href="product-details.html">Shop now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="{{asset('user/assets/img/product/2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>With some gifts</h1>
                            <h2>Special one for you</h2>
                            <p>exclusive offer <span> 20% off </span> this week</p>
                            <a class="button" href="product-details.html">shopping now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="{{asset('user/assets/img/product/3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--Tranding product-->
<section class="pt-60 pb-30 gray-bg mt-3">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Our Products</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="product-details.html">
                        <div class="tranding-pro-img">
                            <img src="{{asset('user/assets/img/product/tranding-1.jpg')}}" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Meyoji Robast Drone</h3>
                            <h4>Drone</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="product-details.html">
                        <div class="tranding-pro-img">
                            <img src="{{asset('user/assets/img/product/tranding-2.jpg')}}" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Ut praesentium earum</h3>
                            <h4>Mevrik</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="product-details.html">
                        <div class="tranding-pro-img">
                            <img src="{{asset('user/assets/img/product/tranding-3.jpg')}}" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Consectetur adipisicing</h3>
                            <h4>Flyer</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!--Tranding product-->



@endsection