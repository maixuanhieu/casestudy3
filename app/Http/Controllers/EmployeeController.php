<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees = Employee::all();
        return view('employee.list', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');
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
        $employee = new Employee();
        $employee->code = $request->input('code');
        $employee->group = $request->input('group');
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->code_people = $request->input('code_people');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->save();

        //Thông báo tạo thành công
        Session::flash('success', 'Tạo nhân viên thành công');

        return redirect()->route('employees.index');
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
            $employees = Employee::where('code', 'like', '%' . $keyword . '%')
                ->orWhere('name', 'like', '%' . $keyword . '%')
                ->get();
            return view('employee.list', compact('employees'));
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
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
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
        $employee = Employee::findOrFail($id);
        $employee->code = $request->input('code');
        $employee->group = $request->input('group');
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->code_people = $request->input('code_people');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->save();

        //Thông báo tạo thành công
        Session::flash('success', 'Cập nhật nhân viên thành công');

        return redirect()->route('employees.index');
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
        $employee = Employee::findOrFail($id);
        $employee->delete();

        //Thông báo tạo thành công
        Session::flash('success', 'Xoá nhân viên thành công');

        return redirect()->route('employees.index');
    }
}
