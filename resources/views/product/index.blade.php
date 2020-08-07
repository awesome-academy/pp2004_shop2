@extends('layout.master')
@section('title', 'Product List')
@section('content')
<div class="container col-md-8 col-md-offset-2 mt-5">
    <div class="card">
        <div class="card-header ">
            <h1 class="float-left">Product</h1>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
            <div class="card-header">
                <a href="{{route('create_product')}}" class="btn btn-success float-right m-2">Create Product</a>
            </div>
        </div>
        <div class="card-body mt-2">
            @if ($products->isEmpty())
            <p> There is no Product.</p>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }} </td>
                        <td>
                        <a href="{{action('ProductController@show', $product->id) }}"> {{ $product->name }} </a>
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{ $product->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection