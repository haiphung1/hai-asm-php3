@extends('layout')
@section('title', 'Danh sách sản phẩm')
@section('titlePage', 'Quản lí sản phẩm')
@section('titleName', 'Danh sách sản phẩm')
@section('content')
<div class="box">
    Bảng hiển thị <a href="{{route('product.add-product')}}" class="btn btn-success">Thêm sản phẩm</a>
    <div class="box-header">
      <h3 class="box-title">Danh sách </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th># Product name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sale percent</th>
            <th>Stocks</th>
            <th>Is_active</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $item) 
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->category['name']}}</td>
                <td>
                  <textarea name="" id="" cols="25" rows="10" readonly>{{$item->description}}</textarea>
                </td>
                <td>{{$item->price}}</td>
                <td>{{$item->sale_percent}}</td>
                <td>{{$item->stocks}}</td>
                <td>{{$item->is_active}}</td>
                <td>
                  <a href="{{route('product.edit-product', $item->id)}}" class="btn btn-sm btn-info">Sửa</a>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      Xóa
                  </button>
                  <a href="{{route('product.detail-product', $item->id)}}" class="btn btn-sm btn-warning">Chi tiết sản phẩm</a>
                </td>
            </tr>
        @endforeach
     
        
        </tbody>
            <tfoot>
            <tr>
                <th># Product name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Sale percent</th>
                <th>Stocks</th>
                <th>Action</th>
            </tr>
            </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Bạn đồng ý xóa sản phẩm này
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <a href="{{route('product.delete-product', $item->id)}}">
                <button type="button" class="btn btn-primary">Xóa</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    
@endsection