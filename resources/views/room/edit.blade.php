@extends('layout.room')
@section('tittle')
<div class="row">
    <div class="col-md-4">
        <h4>Chỉnh sửa phòng</h4>
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
        <a href="{{route('rooms.index')}}"><button type="button" class="btn btn-outline-success">Trở về</button></a>
    </div>
</div>

<br>
@endsection

@section('main-content')
<form style="margin-top: 3rem; margin-bottom: 3rem" method="POST" action="{{ route('rooms.update', $room->id) }}">
    @csrf
    <div class="form-group">
        <label>Mã phòng</label>
        <input type="text" class="form-control" name="code" value="{{$room->code}}">
    </div>
    <div class="form-group">
        <label>Loại phòng</label>
        <select name="group" class="form-control">
            <option hidden>{{$room->group}}</option>
            <option> Phòng 1 giường nhỏ</option>
            <option> Phòng 2 giường nhỏ</option>
            <option> Phòng 1 giường lớn</option>
            <option> Phòng 1 giường lớn và 1 giường nhỏ</option>
            <option> Phòng 3 giường nhỏ</option>
        </select>
    </div>
    <div class="form-group">
        <label>Số lượng phòng</label>
        <input type="number" class="form-control" name="quantity" value="{{$room->quantity}}">
    </div>
    <div class="form-group">
        <label>Số phòng còn trống</label>
        <input type="number" class="form-control" name="empty" value="{{$room->empty_room}}">
    </div>
    <div class="form-group">
        <label>Giá phòng(một đêm)</label>
        <input type="number" class="form-control" name="rates" value="{{$room->room_rates}}">
    </div>
    <button type="submit" class="btn btn-outline-primary">Cập nhật</button>


</form>


@endsection