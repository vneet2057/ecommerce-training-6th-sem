@extends('admin.layouts.main')
@section('content')

@if(session('message'))
<div class="alert alert-success container mt-2">
    {{session('message')}}
</div>
@endif

<div class="container mt-4">
    <form action="/categories/store" method="post">
        @csrf

        <div class="form-gorup my-3">
            <label for="">Category Name</label>
            <input type="text" name="category_name" id="" class="form-control">
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
</div>

<div class="container mt-4">
    <table class="table">
        <thead>
            <th>Category Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->category_name}}</td>
                <td><a href="/categories/edit/{{$category->id}}">Edit</a> <a href="/categories/delete/{{$category->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection