@extends('layout')
@section('title', 'Comment')
@section('titlePage', 'Comment product')
@section('content')
@if ($errors->any())
<div class="alert alert-danger " style="font-size: 1.6rem">
    <ul>
       @foreach ($errors->all() as $errors)
           <li>{{$errors}}</li>
       @endforeach
    </ul>
    
</div>
@endif
    <div class="form-group">
      <label for="">Email User</label>
      <input type="text" name="" id="" class="form-control" value="{{$user->email}}" readonly>
    </div>
    <div class="container">
        <form action="{{route('comment.create-comment')}}" method="post">
            @csrf
                @if (isset($product))
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                @endif
                <input type="hidden" class="form-control" name="user_id"  placeholder="" value="{{$user->id}}">
            <div class="form-group row">
                    <label for="content" class="col-sm-1-12 col-form-label">Content</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="content"  placeholder="">
                    </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Comment</button>
                    <a href="{{route('product.detail-product', $product->id)}}" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>
@endsection