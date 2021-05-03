@extends('layout.room')
@section('tittle')
<div class="row">
    <div class="col-md-10">
        <h4>Thêm phòng mới</h4>
    </div>
    <div class="col-md-1">
        <a href="{{route('rooms.index')}}"><button type="button" class="btn btn-outline-success">Trở về</button></a>
    </div>
</div>
@endsection

@section('main-content')
<form style="margin-top: 3rem; margin-bottom: 3rem" method="POST" action="{{ route('rooms.store')}}">
    @csrf
    <div class="form-group">
        <label>Mã phòng</label>
        <input type="text" class="form-control" name="code">
    </div>
    <div class="form-group">
        <label>Loại phòng</label>
        <select name="group" class="form-control">
            <option> Phòng 1 giường nhỏ</option>
            <option> Phòng 2 giường nhỏ</option>
            <option> Phòng 1 giường lớn</option>
            <option> Phòng 1 giường lớn và 1 giường nhỏ</option>
            <option> Phòng 3 giường nhỏ</option>
        </select>
    </div>
    <div class="form-group">
        <label>Số lượng phòng</label>
        <input type="number" class="form-control" name="quantity">
    </div>
    <div class="form-group">
        <label>Số phòng còn trống</label>
        <input type="number" class="form-control" name="empty_room">
    </div>
    <button type="submit" class="btn btn-outline-primary">Thêm mới</button>


</form>


@endsection