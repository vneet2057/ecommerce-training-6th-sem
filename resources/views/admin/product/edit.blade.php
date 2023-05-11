@extends('admin.layouts.main')
@section('content')

@if(session('message'))
<div class="alert alert-success container mt-2">
    {{session('message')}}
</div>
@endif

<div class="container mt-4 mb-5">
    <form action="/products/update/{{$product->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-gorup my-3">
            <label for="">Product Name</label>
            <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
        </div>
        <div class="form-gorup my-3">
            <label for="">Product Price</label>
            <input type="number" name="product_price" value="{{$product->product_price}}" class="form-control">
        </div>
        <div class="form-gorup my-3">
            <label for="">Product Description</label>
            <textarea name="product_description" value="" cols="30" rows="10" class="form-control">{{$product->product_description}}</textarea>
        </div>
        <div class="form-gorup my-3">
            <label for="">Product Image</label>
            <input type="file" name="product_image" value="" class="form-control">
            <span>Old Photo: <img width="10%" src="{{asset($product->product_image)}}" alt=""></span>
        </div>
        <div class="form-gorup my-3">
            <label for="">Product Category</label>
            <select name="category_id" id="" class="form-control">
                <option value="">Select Category</option>
                <!-- make a category selected according to the category_id fetched -->
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
</div>

@endsection