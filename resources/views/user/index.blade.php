@extends('user.layouts.main')
@section('content')

<?php

use App\Models\Product;

$products = Product::all();

?>

<!--slider area start-->
<section class="slider_section d-flex align-items-center" data-bgimg="{{asset('user/assets/img/slider/slider3.jpg')}}">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Next level of Polo Tshirts</h1>
                            <h2>Insane Quality for use</h2>
                            <p>Special offer <span> 20% off </span> this week</p>
                            <a class="button" href="product-details.html">Buy now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="{{asset('default.jpg')}}" style="width: 80% !important;" alt="">
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
                            <h1>Best Material </h1>
                            <h2>100% Flexible</h2>
                            <p>exclusive offer <span> 20% off </span> this week</p>
                            <a class="button" href="product-details.html">Shop now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="{{asset('default1.webp')}}" alt="">
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
                            <img src="{{asset('default2.png')}}" style="width: 60% !important;" alt="">
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
            @foreach($products as $product)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="/view-product/{{$product->id}}">
                        <div class="tranding-pro-img">
                            <img src="{{asset($product->product_image)}}" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>{{$product->product_name}}</h3>
                            <h4>{{$product->category['category_name']}}</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">NPR {{$product->product_price}}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section><!--Tranding product-->



@endsection