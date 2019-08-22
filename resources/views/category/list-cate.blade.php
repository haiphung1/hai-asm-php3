@extends('layout')
@section('title', 'Danh sách danh mục')
@section('titlePage', 'Quản lí danh mục')
@section('titleName', 'Danh sách danh mục')
@section('content')
    Bảng hiển thị
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách <a href="{{route('category.cate-add')}}" class="btn btn-success">Thêm danh mục</a></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th># Category name</th>
                <th>Parent_id</th>
                <td>Name</td>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($category as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->parent_id}}</td>
                    <td>{{$item->childs['name']}}</td>
                    <td>
                      <a href="{{route('category.edit-cate', $item->id)}}" class="btn btn-sm btn-info">Sửa</a>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                          Xóa
                      </button>
                    </td>
                </tr>
              @endforeach
            </tbody>
                <tfoot>
                <tr>
                    <th># Category name</th>
                    <th>Parent_id</th>
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
              <a href="{{route('category.delete-cate', $item->id)}}">
                  <button type="button" class="btn btn-primary">Xóa</button>
              </a>
            </div>
          </div>
        </div>
      </div>
@endsection