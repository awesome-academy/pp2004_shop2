@extends('layout.master')
@section('title', 'Create Product')
@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="card mt-5">
        <div class="card-header ">
            <h1 class="float-left">Create Product</h1>
            <div class="clearfix"></div>
        </div>
        <div class="card-body mt-2">
            <form method="post" action{{route('create_product')}} >
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
                        <label for="name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control"  placeholder="Nhập Tên Sản Phẩm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="integer" name="price" class="form-control"  placeholder="Nhập Giá Sản Phẩm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <input type="text" name="image" class="form-control"  placeholder="Nhập Link dẫn ảnh">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content"  class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name= "content" rows="3" id="content"></textarea>
                            <span class="help-block">Feel about product.</span>
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