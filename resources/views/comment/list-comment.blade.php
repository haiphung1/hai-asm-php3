@extends('layout')
@section('title', 'Quản lí comment')
@section('titlePage', 'Quản lí comment')
@section('titleName', 'Danh sách comment')
@section('content')
Bảng hiển thị
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Danh sách
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th># user email</th>
            <th>Product_id</th>
            <th>Product Name</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($comments as $item)
            <tr>
                <td>{{$item->users['email']}}</td>
                <td>{{$item->product_id}}</td>
                <th>{{$item->products['name']}}</th>
                <th>{{$item->content}}</th>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Xóa
                    </button>
                </td>
            </tr>
          @endforeach
        </tbody>
            <tfoot>
            <tr>
                <th># user email</th>
                <th>Product id</th>
                <th>Product Name</th>
                <th>Content</th>
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
            Bạn đồng ý xóa danh mục này
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <a href="{{route('comment.delete-comment', $item->id)}}">
                <button type="button" class="btn btn-primary">Xóa</button>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection