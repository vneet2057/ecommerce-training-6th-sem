@extends('user.layouts.main')
@section('content')

<?php

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

if (auth()->user()) {
    $carts = Cart::where('user_id', Auth::user()->id)->get();
} else {
    $carts = null;
}



?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index-2.html">home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Checkout page section-->
<div class="Checkout_section mt-60">
    <div class="container">

        <div class="checkout_form">
            <form action="/place-order" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>Billing Details</h3>
                        <div class="row">

                            <div class="col-lg-6 mb-20">
                                <label> Name <span>*</span></label>
                                <input type="text" name="customer_name">
                            </div>

                            <div class="col-6 mb-20">
                                <label>Company Name</label>
                                <input type="text" name="customer_company">
                            </div>


                            <div class="col-12 mb-20">
                                <label>Address <span>*</span></label>
                                <input placeholder="House number and street name" name="customer_address" type="text">
                            </div>
                            <div class="col-6 mb-20">
                                <label>Town / City <span>*</span></label>
                                <input type="text" name="customer_town_city">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Phone<span>*</span></label>
                                <input type="text" name="customer_phone_number">
                            </div>


                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea id="order_note" rows="2" name="customer_note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $total = 0;
                                    ?>
                                    @foreach($carts as $cart)
                                    <tr>
                                        <td> {{$cart->product['product_name']}} <strong> × {{$cart->quantity}}</strong></td>
                                        <td> NPR {{$cart->unit_price}}</td>
                                    </tr>
                                    <?php
                                    $total += $cart->quantity * $cart->unit_price;
                                    ?>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>NPR {{$total}}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment_method">
                            <div class="panel-default">
                                <input id="payment" name="order_payment_type" value="cod" type="radio" data-target="createp_account" />
                                <label for="payment" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree">COD</label>

                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body1">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-default">
                                <input id="payment_defult" name="order_payment_type" value="khalti" type="radio" data-target="createp_account" />
                                <label for="payment_defult" data-toggle="collapse" data-target="#collapseFour" aria-controls="collapseFour">Khalti <img src="assets/img/icon/papyel.png" alt=""></label>

                                <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body1">
                                        <p>Pay via Khalti; you can pay with your khlati account. <a href="#">What is Paypal?</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="order_button">
                                <button type="submit">Proceed to buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Checkout page section end-->
@endsection