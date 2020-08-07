@extends('layout.master')
@section('title', 'Edit order')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="card mt-5">
        <div class="card-header ">
            <h1 class="float-left">Create order</h1>
            <div class="clearfix"></div>
        </div>
        <div class="card-body mt-2">
            <form method="post">
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Customer ID</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Nhập ID Customer " name="customer_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-lg-2 control-label">Product_id</label>
                        <div class="col-lg-10">
                            <input type="integer" name="product_id" class="form-control" placeholder="Nhập ID sản phẩm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Amount</label>
                        <div class="col-lg-10">
                            <input type="text" name="amount" class="form-control" placeholder="Nhập Số lượng hàng">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="status" rows="3" id="content"></textarea>
                            <span class="help-block">Feel about order.</span>
                        </div>
                    </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        </fieldset>
        </form>
    </div>
</div>
</div>
@endsection