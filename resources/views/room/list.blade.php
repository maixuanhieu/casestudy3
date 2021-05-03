@extends('layout.room')

@section('tittle')
<div class="row">
    <div class="col-md-4">
        <h4>Danh sách phòng</h4>
        @if(Session::has('success'))
        <p class="text-success">{{Session::get('success')}}</p>

        @endif
    </div>
    <div class="col-md-7">
        <form class="navbar-form navbar-left" action="{{route('rooms.search')}}" method="POST">
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
        <a href="{{route('rooms.create')}}"><button type="button" class="btn btn-outline-success">Thêm mới</button></a>
    </div>
</div>

<br>

@endsection

@section('main-content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Mã phòng</th>
            <th scope="col">Loại phòng</th>
            <th scope="col">Số lượng phòng</th>
            <th scope="col">Số phòng trống</th>
            <th scope="col">Giá phòng(một đêm)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $key => $room)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$room->group}}</td>
            <td>{{$room->quantity}}</td>
            <td>{{$room->empty_room}}</td>
            <td>{{$room->room_rates}}</td>
            <td>
                <a href="{{route('rooms.edit', $room->id)}}"><button type="button" class="btn btn-outline-secondary btn-sm">Sửa</button></a>
                <a href="{{route('rooms.destroy', $room->id)}}" onclick="return confirm('Bạn có muốn xoá {{$room->group}}')"><button type="button" class="btn btn-outline-dark btn-sm">Xoá</button></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection