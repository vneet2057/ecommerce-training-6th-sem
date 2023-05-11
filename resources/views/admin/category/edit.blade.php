@extends('admin.layouts.main')
@section('content')
<div class="container mt-4">
    <form action="/categories/update/{{$category->id}}" method="post">
        @csrf
        <div class="form-gorup my-3">
            <label for="">Category Name</label>
            <input type="text" name="category_name" value="{{$category->category_name}}" id="" class="form-control">
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
</div>
@endsection