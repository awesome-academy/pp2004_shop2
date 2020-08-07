@extends('layout.master')
@section('title', 'Create Order')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="card mt-5">
        <div class="card-header ">
            <h1 class="float-left">Create Order</h1>
            <div class="clearfix"></div>
        </div>
        <div class="card-body mt-2">
            <form method="post" action{{route('create_order')}}>
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="customer_id" class="col-lg-2 control-label">Customer ID</label>
                        <div class="col-lg-10">
                            <input type="text" name="customer_id" class="form-control" placeholder="Nhập ID Khách Hàng">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product_id" class="col-lg-2 control-label">Product ID</label>
                        <div class="col-lg-10">
                            <input type="integer" name="product_id" class="form-control" placeholder="Nhập ID Sản Phẩm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-lg-2 control-label">Amount</label>
                        <div class="col-lg-10">
                            <input type="text" name="amount" class="form-control" placeholder="Nhập Số Lượng">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="status" rows="3" id="status"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection