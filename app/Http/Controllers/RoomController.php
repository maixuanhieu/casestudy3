<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rooms = Room::all();
        return view('room.list', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $room = new Room();
        $room->code = $request->input('code');
        $room->group = $request->input('group');
        $room->quantity = $request->input('quantity');
        $room->empty_room = $request->input('empty_room');
        $room->save();

        //Thông báo tạo thành công
        Session::flash('success', 'Tạo phòng thành công');

        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        {
            $keyword = $request->search;
            $rooms = Room::where('code', 'like', '%' . $keyword . '%')
                ->orWhere('group', 'like', '%' . $keyword . '%')
                ->get();
            return view('room.list', compact('rooms'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $room = Room::findOrFail($id);
        return view('room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $room = Room::findOrFail($id);
        $room->code = $request->input('code');
        $room->group = $request->input('group');
        $room->quantity = $request->input('quantity');
        $room->empty_room = $request->input('empty_room');
        $room->save();

        //Thông báo tạo thành công
        Session::flash('success', 'Cập nhật phòng thành công');

        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        //
        $room = Room::findOrFail($id);
        $room->delete();

        //Thông báo tạo thành công
        Session::flash('success', 'Xoá phòng thành công');

        return redirect()->route('rooms.index');
    }
}

