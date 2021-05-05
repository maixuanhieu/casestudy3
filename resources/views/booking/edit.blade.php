@extends('layout.booking')
@section('tittle')
<div class="row">
    <div class="col-md-4">
        <h4>Chỉnh sửa đặt phòng</h4>
        @if(Session::has('success'))
        <p class="text-success">{{Session::get('success')}}</p>

        @endif
    </div>
    <div class="col-md-1">
        <a href="{{route('bookings.index')}}"><button type="button" class="btn btn-outline-success">Trở về</button></a>
    </div>
</div>

<br>
@endsection

@section('main-content')
<form method="POST" action="{{ route('bookings.store'}}">
    @csrf
    <div class="row no-margin">
        <div class="col-sm-6">
            <div class="form-group">
                <span class="form-label">Ngày nhận phòng</span>
                <input class="form-control" type="date" required="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <span class="form-label">Ngày trả phòng</span>
                <input class="form-control" type="date" required="">
            </div>
        </div>
    </div>
    <div class="row no-margin">
        <div class="col-sm-6">
            <div class="form-group">
                <span class="form-label">Người lớn</span>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <span class="select-arrow"></span>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <span class="form-label">Trẻ em (0-17)</span>
                <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                </select>
                <span class="select-arrow"></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <span class="form-label">Loại phòng</span>
        <select class="form-control" required="">
            <option value="" selected="" hidden="">Chọn loại phòng</option>
            <option>Phòng 1 giường nhỏ</option>
            <option>Phòng 2 giường nhỏ</option>
            <option>Phòng 1 giường lớn</option>
            <option>Phòng 1 giường lớn và 1 giường nhỏ</option>
            <option>Phòng 3 giường nhỏ</option>
        </select>
        <span class="select-arrow"></span>
    </div>
    <div class="form-group">
        <span class="form-label">Số phòng</span>
        <select class="form-control" required="">
            <option value="" selected="" hidden="">Số phòng</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
        <span class="select-arrow"></span>
    </div>
    <div class="form-group">
        <span class="form-label">Email</span>
        <input class="form-control" type="email" placeholder="Địa chỉ email của bạn">
    </div>
    <div class="form-group">
        <span class="form-label">Số điện thoại</span>
        <input class="form-control" type="tel" placeholder="Số điện thoại của bạn">
    </div>
    <div class="form-btn">
        <button class="submit-btn">Đặt Ngay</button>
    </div>
</form>

@endsection