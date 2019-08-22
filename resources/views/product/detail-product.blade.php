@extends('layout')
@section('title', 'Chi tiết sản phẩm')
@section('titlePage', 'Chi tiết sản phẩm')
@section('content')
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th># Product name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sale percent</th>
            <th>Stocks</th>
            <th>Is_active</th>
            <th>Bình luận</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{$product->name}}</td>
                <td>{{$product->category['name']}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->sale_percent}}</td>
                <td>{{$product->stocks}}</td>
                <td>{{$product->is_active}}</td>
                <td>
                    <a href="{{route('comment.add-comment', $product->id)}}" class="btn btn-danger btn-sm">Bình luận</a>
                    <a href="{{route('product.list-product')}}" class="btn btn-sm btn-info">Trở về</a>
                </td>
            </tr>
        </tbody>
</table>
    
@endsection