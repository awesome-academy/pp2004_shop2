@extends('layout.master')
@section('title', 'View a product')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">{{ $product->product }}</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <p> <strong>Product Name</strong>: {{ $product->name }}</p>
                <p> {{ $product->content }} </p>
                <a href="{{ action('ProductController@edit', $product->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ action('ProductController@destroy', $product->id) }}" class="btn btn-info">Delete</a>
            </div>
        </div>
    </div>

@endsection