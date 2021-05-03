@extends('layout.admin')
@section('tittle')
<div class="row">
    <div class="col-md-4">
        <h4>Chỉnh sửa nhân viên</h4>
        @if(Session::has('success'))
        <p class="text-success">{{Session::get('success')}}</p>

        @endif
    </div>
    <div class="col-md-7">
        <form class="navbar-form navbar-left" action="">
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                </div>
            </div>
        </form>

    </div>
    <div class="col-md-1">
        <a href="{{route('employees.index')}}"><button type="button" class="btn btn-outline-success">Trở về</button></a>
    </div>
</div>

<br>
@endsection

@section('main-content')
<form style="margin-top: 3rem; margin-bottom: 3rem" method="POST" action="{{ route('employees.update', $employee->id) }}">
    @csrf
    <div class="form-group">
        <label>Mã nhân viên</label>
        <input type="text" class="form-control" name="code" value="{{$employee->code}}">
    </div>
    <div class="form-group">
        <label>Nhóm nhân viên</label>
        <select name="group" class="form-control">
            <option hidden>{{$employee->group}}</option>
            <option> Quản lý hệ thống</option>
            <option> Quản lý nhân sự</option>
            <option> Quản lý phòng</option>
            <option> Quản lý dịch vụ</option>
            <option> Lễ Tân</option>
        </select>
    </div>
    <div class="form-group">
        <label>Họ và tên</label>
        <input type="text" class="form-control" name="name" value="{{$employee->name}}">
    </div>
    <div class="form-group">
        <label>Ngày sinh</label>
        <input type="text" class="form-control" name="dob" value="{{$employee->dob}}">
    </div>
    <div class="form-group">
        <label> Giới tính </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Nam">
            <label class="form-check-label" for="inlineRadio1">Nam</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Nữ">
            <label class="form-check-label" for="inlineRadio2">Nữ</label>
        </div>
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <input type="number" class="form-control" name="phone" value="{{$employee->phone}}">
    </div>
    <div class="form-group">
        <label>Số CMND</label>
        <input type="number" class="form-control" name="code_people" value="{{$employee->code_people}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{{$employee->email}}">
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <input type="text" class="form-control" name="address" value="{{$employee->address}}">
    </div>
    <button type="submit" class="btn btn-outline-primary">Cập nhật</button>


</form>


@endsection