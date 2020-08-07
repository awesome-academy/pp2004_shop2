@extends('layout.master')
@section('title', 'View a Order')
@section('content')
<div class="container col-md-8 col-md-offset-2 mt-5">
    <div class="card">
        <div class="card-header ">
            <h5 class="float-left">{{ $order->order }}</h5>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <p> <strong>Customer ID</strong> : {{ $order->customer_id }}</p>
            <p> <strong>Product ID </strong> : {{ $order->product_id }}</p>
            <p>Amount : {{ $order->amount }}</p>
            <p> {{ $order->status }} </p>
            <a href="{{ action('OrderController@edit', $order->id )}}" class="btn btn-info">Edit</a>
            <a href="{{ action('OrderController@destroy', $order->id )}}" class="btn btn-info">Delete</a>
        </div>
    </div>
</div>
@endsection