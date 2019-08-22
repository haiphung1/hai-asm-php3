@extends('layout')
@section('title', 'Thêm mới user')
@section('titlePage', 'Thêm mới user')
@section('content')
    <div class="container">
        <form action="{{route('user.create-user')}}" method="post">
            @csrf
            <div class="form-group row">
                <label for="first_name" class="col-sm-1-12 col-form-label">First name</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="first_name"  placeholder="First name">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_name" class="col-sm-1-12 col-form-label">Last name</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="last_name"  placeholder="Last name">
                </div>
            </div>
            <div class="form-group row">
                <label for="Email" class="col-sm-1-12 col-form-label">Email</label>
                <div class="col-sm-1-12">
                    <input type="email" class="form-control" name="email"  placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-1-12 col-form-label">Password</label>
                <div class="col-sm-1-12">
                    <input type="password" class="form-control" name="password"  placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-1-12 col-form-label">Address</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="address"  placeholder="Address">
                </div>
            </div>
            <div class="form-group row">
                <label for="birthday" class="col-sm-1-12 col-form-label">Birthday</label>
                <div class="col-sm-1-12">
                    <input type="date" class="form-control" name="birthday"  placeholder="Birthday">
                </div>
            </div>
            <input type="hidden" value="0" name="is_active">
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </div>
            </div>
        </form>
    </div>
@endsection