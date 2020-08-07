@extends('layout.master')
@section('title','Order')
@section('content')
<div class="container col-md-8 col-md-offset-2 mt-5">
    <div class="card">
        <div class="card-header ">
            <h1 class="float-left">Order</h1>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <div class="card-header">
                <a href="{{route('create_order')}}" class="btn btn-success float-right m-2">Create Order</a>
            </div>
        </div>
        <div class="card-body mt-2">
            @if ($orders->isEmpty())
            <p> There is no orders .</p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer ID</th>
                        <th>Product ID</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>
                            <a href="{{ action('OrderController@show', $order->id ) }}"> {{ $order->id }} </a>
                        </td>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->product_id }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ $order->status }}</td>
                        <td><a href="{{ action('OrderController@edit', $order->id )}}" class="btn btn-info">Edit</a>
                            <a href="{{ action('OrderController@destroy', $order->id )}}" class="btn btn-info">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection