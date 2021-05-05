@extends('layout.booking')

@section('tittle')
<div class="row">
    <div class="col-md-4">
        <h4>Đặt phòng</h4>
        @if(Session::has('success'))
        <p class="text-success">{{Session::get('success')}}</p>

        @endif
    </div>

    @section('main-content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Ngày nhận phòng</th>
            <th scope="col">Ngày trả phòng</th>
            <th scope="col">Người lớn</th>
            <th scope="col">Trẻ em (0-17)</th>
            <th scope="col">Loại phòng</th>
            <th scope="col">Số phòng</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $key => $booking)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$booking->checkin_date}}</td>
            <td>{{$booking->checkout_date}}</td>
            <td>{{$booking->adult}}</td>
            <td>{{$booking->children}}</td>
            <td>{{$booking->group}}</td>
            <td>{{$booking->room_rates}}</td>
            <td>{{$booking->email}}</td>
            <td>{{$booking->phone}}</td>
            <td>
                <a href="{{route('bookings.edit', $booking->id)}}"><button type="button" class="btn btn-outline-secondary btn-sm">Thay đổi đặt phòng</button></a>
                <a href="{{route('bookings.destroy', $booking->id)}}" onclick="return confirm('Bạn có muốn hủy đặt phòng {{$booking->group}}')"><button type="button" class="btn btn-outline-dark btn-sm">Xoá</button></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection