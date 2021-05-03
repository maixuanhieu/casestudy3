@extends('layout.admin')

@section('tittle')
<div class="row">
    <div class="col-md-4">
        <h4>Danh sách nhân viên</h4>
        @if(Session::has('success'))
        <p class="text-success">{{Session::get('success')}}</p>

        @endif
    </div>
    <div class="col-md-7">
        <form class="navbar-form navbar-left" action="{{route('employees.search')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                </div>
            </div>
        </form>

    </div>
    <div class="col-md-1">
        <a href="{{route('employees.create')}}"><button type="button" class="btn btn-outline-success">Thêm mới</button></a>
    </div>
</div>

<br>

@endsection

@section('main-content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Mã nhân viên</th>
            <th scope="col">Nhóm nhân viên</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $key => $employee)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$employee->group}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->gender}}</td>
            <td>{{$employee->phone}}</td>
            <td>
                <a href="{{route('employees.edit', $employee->id)}}"><button type="button" class="btn btn-outline-secondary btn-sm">Sửa</button></a>
                <a href="{{route('employees.destroy', $employee->id)}}" onclick="return confirm('Bạn có muốn xoá {{$employee->name}}')"><button type="button" class="btn btn-outline-dark btn-sm">Xoá</button></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection