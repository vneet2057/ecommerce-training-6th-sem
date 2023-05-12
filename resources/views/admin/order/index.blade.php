@extends('admin.layouts.main')
@section('content')

@if(session('message'))
<div class="alert alert-success container mt-2">
    {{session('message')}}
</div>
@endif

<h3 class="container mt-3">
    Orders
</h3>

<div class="container mt-4">
    <table class="table">
        <thead>
            <th width="30%">Order Details</th>
            <th>Order Status</th>
            <th>Payment Status</th>
            <th>Order Total Amount</th>
            <th>Action</th>
        </thead>
        <tbody>
            <!-- loop throgh table row using orders variable -->
            @foreach($orders as $order)
            <tr>
                <td>
                    <p>Order ID: {{$order->id}}</p>
                    <p>Customer Name: {{$order->customer_name}}</p>
                    <p>Customer Name: {{$order->customer_phone_number}}</p>
                    <p>Order Date: {{$order->created_at->format('d-m-Y')}}</p>
                    <p>Order Payment Method: {{$order->order_payment_type}}</p>
                </td>
                <td>
                    {{$order->order_status}}
                </td>
                <td>
                    {{$order->payment_status}}
                </td>
                <td>
                    NPR &nbsp; {{$order->order_total}}
                </td>
                <td>
                    <a href="/View/{{$order->id}}" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$order->id}}">View Orders</a>
                </td>

            </tr>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal-{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Order Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="header d-flex justify-content-between">
                                <span>item</span>
                                <span>Quantity</span>
                                <span>Unit Price</span>
                                <span>Total</span>
                            </div>
                            @foreach($order['order_details'] as $item)
                            <div class="item d-flex justify-content-between">
                                <span>{{$item->product_name}}</span>
                                <span>{{$item->quantity}}</span>
                                <span>{{$item->unit_price}}</span>
                                <span>{{$item->quantity * $item->unit_price}}</span>
                            </div>
                            @endforeach
                        </div>
                        <form action="/change-order-details/{{$order->id}}" method="post">
                            @csrf
                            <div class="form-group my-3 container">
                                <label for="">Payment Status</label>
                                <select name="payment_status" id="">
                                    <option value="unpaid">Unpaid</option>
                                    <option value="paid">Paid</option>
                                </select>
                            </div>
                            <div class="form-group my-3 container">
                                <label for="">Order Status</label>
                                <select name="order_status" id="">
                                    <option value="pending">Pending</option>
                                    <option value="delivering">Delivering</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </tbody>

    </table>
</div>

@endsection