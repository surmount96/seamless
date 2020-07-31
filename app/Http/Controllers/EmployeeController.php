<?php

namespace App\Http\Controllers;

use App\Employee;
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
        $employees = Employee::orderBy('job_title','desc')->paginate(7);
        return [
            'status'=>200,
            'employees' => $employees
        ];
    }
    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('show',compact('employee'));
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return [
            'employee' => $employee
        ];
    }

    public function store(Request $request)
    {
        Employee::create($request->all());
        return [
            'status' => 200,
            'message' => 'Successfully created'
        ];
    }

    public function update(Request $request, $id)
    {
        Employee::findOrFail($id)->update($request->all());
        return [
            'status' => 200,
            'message' => 'Successfully updated'
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
        return [
            'status' => 200,
            'message' => 'Successfully deleted'
        ];
    }
}
