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
           
        </tbody>

    </table>
</div>

@endsection