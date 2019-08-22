@extends('layout')
@section('title', 'Thêm danh mục')
@section('titlePage', 'Quản lí danh mục')
@section('titleName', 'Thêm danh mục mới')
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
    <form action="{{route('category.create-cate')}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-1-12 col-form-label">Category Name</label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="name" id="" placeholder="Category Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="parent_id" class="col-sm-1-12 col-form-label">Parent id</label>
            <select name="parent_id" id="" class="form-control">
                <option value="">Chọn danh mục</option>
                @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="{{route('category.list-cate')}}" class="btn btn-danger">Hủy</a>
            </div>
        </div>
    </form>
</div>
    
@endsection