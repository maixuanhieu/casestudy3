@extends('layout.admin')
@section('tittle')
<div class="row">
    <div class="col-md-10">
        <h4>Thêm mới nhân viên</h4>
    </div>
    <div class="col-md-1">
        <a href="{{route('employees.index')}}"><button type="button" class="btn btn-outline-success">Trở về</button></a>
    </div>
</div>
@endsection

@section('main-content')
<form style="margin-top: 3rem; margin-bottom: 3rem" method="POST" action="{{ route('employees.store')}}">
    @csrf
    <div class="form-group">
        <label>Mã nhân viên</label>
        <input type="text" class="form-control" name="code">
    </div>
    <div class="form-group">
        <label>Nhóm nhân viên</label>
        <select name="group" class="form-control">
            <option> Quản lý hệ thống</option>
            <option> Quản lý nhân sự</option>
            <option> Quản lý phòng</option>
            <option> Quản lý dịch vụ</option>
            <option> Lễ Tân</option>
        </select>
    </div>
    <div class="form-group">
        <label>Họ và tên</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Ngày sinh</label>
        <input type="text" class="form-control" name="dob">
    </div>
    <div class="form-group">
        <label> Giới tính </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" checked>
            <label class="form-check-label" for="inlineRadio1">Nam</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
            <label class="form-check-label" for="inlineRadio2">Nữ</label>
        </div>
    </div>

    <div class="form-group">
        <label>Số điện thoại</label>
        <input type="number" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label>Số CMND</label>
        <input type="number" class="form-control" name="code_people">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <input type="text" class="form-control" name="address">
    </div>
    <button type="submit" class="btn btn-outline-primary">Thêm mới</button>


</form>


@endsection