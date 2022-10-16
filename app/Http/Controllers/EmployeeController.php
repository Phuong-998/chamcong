<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $data = employee::all();
        return view('layouts.employee.index', ['data'=>  $data ]);
    }

    public function add()
    { 
        return view('layouts.employee.add');
    }

    public function handlAddEmployee(Request $request)
    {
        $data = $request->post();
        if (isset($data['submit'])) {
            $insert = [
                'name' => isset($data['name']) ? $data['name'] : "",
                'role' => isset($data['role']) ? $data['role'] : "",
                'salary' => isset($data['salary']) ? (float)str_replace(',', '', $data['salary']) : ""
            ];
        }
        employee::create($insert);
        return redirect()->route('employee');
    }

    public function edit(Request $request){
        $id = $request->id;
        $data = employee::where('id',$id)->first();
        return view('layouts.employee.edit', ['data'=>  $data ]);
    }

    public function handlEditEmployee(Request $request){
        $data = $request->post();
        if (isset($data['submit'])) {
            $id = isset($data['id']) ? $data['id'] : "";
            $update = [
                'name' => isset($data['name']) ? $data['name'] : "",
                'role' => isset($data['role']) ? $data['role'] : "",
                'salary' => isset($data['salary']) ? (float)str_replace(',', '', $data['salary']) : ""
            ];
        }
        employee::where('id', $id)->update($update);
        return redirect()->route('employee');
    }

    public function delete(Request $request){
        $id = $request->id;
        employee::where('id', $id)->delete();
        return redirect()->route('employee');
    }
}
