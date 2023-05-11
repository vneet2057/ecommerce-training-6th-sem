@extends('admin.layouts.main')
@section('content')

@if(session('message'))
<div class="alert alert-success container mt-2">
    {{session('message')}}
</div>
@endif

<div class="container mt-4">
    <form action="/products/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-gorup my-3">
            <label for="">Product Name</label>
            <input type="text" name="product_name" id="" class="form-control">
        </div>
        <div class="form-gorup my-3">
            <label for="">Product Price</label>
            <input type="text" name="product_price" id="" class="form-control">
        </div>
        <div class="form-gorup my-3">
            <label for="">Product Description</label>
            <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-gorup my-3">
            <label for="">Product Image</label>
            <input type="file" name="product_image" id="" class="form-control">
        </div>
        <div class="form-gorup my-3">
            <label for="">Product Category</label>
            <select name="category_id" id="" class="form-control">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
</div>

<div class="container mt-4">
    <table class="table">
        <thead>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Action</th>
        </thead>
        <tbody>
           
        </tbody>

    </table>
</div>

@endsection