<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::all();
        return view('booking.list', compact('bookings'));
    }

    public function create(){
        return view('booking.create');
    }

    public function store(Request $request)
    {
        //
        $booking = new Booking();
        $booking->checkin_date = $request->input('checkin_date');
        $booking->checkout_date = $request->input('checkout_date');
        $booking->adult = $request->input('adult');
        $booking->children = $request->input('children');
        $booking->group = $request->input('group');
        $booking->room_rates = $request->input('room_rates');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->save();

        //Thông báo đặt thành công
        Session::flash('success', 'Đặt phòng thành công');

        return redirect()->route('bookings.index');
    }

    public function edit($id)
    {
        //
        $booking = Booking::findOrFail($id);
        return view('booking.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        //
        $booking = new Booking();
        $booking->checkin_date = $request->input('checkin_date');
        $booking->checkout_date = $request->input('checkout_date');
        $booking->adult = $request->input('adult');
        $booking->children = $request->input('children');
        $booking->group = $request->input('group');
        $booking->room_rates = $request->input('room_rates');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->save();

        //Thông báo cập nhật đặt phòng thành công
        Session::flash('success', 'Cập nhật đặt phòng thành công');

        return redirect()->route('bookings.index');
    }

    public function destroy($id)

    {
        //
        $booking = Booking::findOrFail($id);
        $booking->delete();

        //Thông báo tạo thành công
        Session::flash('success', 'Hủy đặt phòng thành công');

        return redirect()->route('bookings.index');
    }
}
