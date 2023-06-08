@extends('layouts.app')

@section('content')
<head> 
   <title>Categories</title>
</head>
{{-- message --}}
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
             @endif
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Cover</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody class="table-light">
            @foreach ($cat as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td><img src="{{ asset('images/category/'. $category->image) }}" width="50" height="50"
                        alt="">
                    </td>
                    <td>
                        <a href="{{route('Category/edit',$category->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('Category/delete',$category->id)}}" onclick="return confirm('Are you sure? \n If you confirm you will remove all the images in this category ...')" class="btn btn-danger">Delete</a>
                        <a href="{{route('Category/show',$category->id)}}" class="btn btn-primary">View Images</a>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <a href="{{route('Category/create')}}" class="btn btn-secondary ">Add New Category</a>
        <div class="d-flex justify-content-center" style="flex-dircetion: row; ">
            {!! $cat->links() !!}
        </div>
        
    </div>
</div>
</div>

@endsection
