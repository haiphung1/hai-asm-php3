@extends('layout')
@section('title', 'Danh sách sản phẩm')
@section('titlePage', 'Quản lí sản phẩm')
@section('titleName', 'Sửa sản phẩm')
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
<div class="container">
        <form action="{{route('product.update-product')}}" method="post">
            @csrf
            @if (isset($product))
                <input type="hidden" value="{{$product->id}}" name="id">
            @endif
            <div class="form-group row">
                <label for="" class="col-sm-1-12 col-form-label">Product Name</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="name" id="" placeholder="Product Name" value="{{$product->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="">Danh mục sản phẩm</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($category as $item)
                            <option 
                                @if ($product->category_id == $item->id)
                                    selected
                                @endif
                            value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                    <label for="" class="col-sm-1-12 col-form-label">Description</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="description" id="" placeholder="Description" value="{{$product->description}}">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="" class="col-sm-1-12 col-form-label">Price</label>
                    <div class="col-sm-1-12">
                        <input type="number" class="form-control" name="price" id="" placeholder="Price" value="{{$product->price}}">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="" class="col-sm-1-12 col-form-label">Sale_percent</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="sale_percent" id="" placeholder="Sale_percent" value="{{$product->sale_percent}}">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="" class="col-sm-1-12 col-form-label">Stocks</label>
                    <div class="col-sm-1-12">
                        <input type="number" class="form-control" name="stocks" id="" placeholder="Stocks" value="{{$product->stocks}}">
                    </div>
            </div>
            <div class="form-group row">
                <label for="">Trạng thái</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_active" 
                        @if ($product->is_active == 1)
                            checked
                        @endif
                    value="1" >
                    <label class="form-check-label" for="">
                        Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_active"
                        @if ($product->is_active != 1)
                            checked
                        @endif
                    value="0" >
                    <label class="form-check-label" for="">
                        In active
                    </label>
                </div>
                         
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a href="{{route('product.list-product')}}" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>
@endsection