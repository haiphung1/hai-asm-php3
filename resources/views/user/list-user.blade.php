@extends('layout')
@section('title', 'Quản lí user')
@section('titlePage', 'Quản lí User')
@section('titleName', 'Danh sách')
@section('content')
Bảng hiển thị <a href="{{route('user.add-user')}}" class="btn btn-danger">Thêm mới</a>
<div class="box">
        <div class="box-header">
          <h3 class="box-title">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th># First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>address</th>
                <th>Birthday</th>
                <th>Is_active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $item)
                <tr>
                    <td>{{$item->first_name}}</td>
                    <td>{{$item->last_name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->birthday}}</td>
                    <td>{{$item->is_active}}</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-info">Sửa</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
                <tfoot>
                <tr>
                    <th># First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>address</th>
                    <th>Birthday</th>
                    <th>Is_active</th>
                    <th>Action</th>
                </tr>
                </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>

      
@endsection