@extends('layout')
@section('title', 'Danh sách sản phẩm')
@section('titlePage', 'Quản lí sản phẩm')
@section('titleName', 'Thêm mới sản phẩm')
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
        <form action="{{route('product.create-product')}}" method="post">
            @csrf
            <div class="form-group row">
                <label for="" class="col-sm-1-12 col-form-label">Product Name</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="name" id="" placeholder="Product Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="">Danh mục sản phẩm</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row">
                    <label for="" class="col-sm-1-12 col-form-label">Description</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="description" id="" placeholder="Description">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="" class="col-sm-1-12 col-form-label">Price</label>
                    <div class="col-sm-1-12">
                        <input type="number" class="form-control" name="price" id="" placeholder="Price">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="" class="col-sm-1-12 col-form-label">Sale_percent</label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="sale_percent" id="" placeholder="Sale_percent">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="" class="col-sm-1-12 col-form-label">Stocks</label>
                    <div class="col-sm-1-12">
                        <input type="number" class="form-control" name="stocks" id="" placeholder="Stocks">
                    </div>
            </div>
            <div class="form-group row">
                <label for="">Trạng thái</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_active" id="" value="1" checked>
                    <label class="form-check-label" for="">
                        Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_active" id="" value="0">
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