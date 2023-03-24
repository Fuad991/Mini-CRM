<?php

namespace App\Http\Controllers;

use App\Models\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function index()
    {
        $model= employees::all();
        return view('employee.index',compact('model'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first-name'=>'required',
            'last-name'=>'required',
        ]);
        $model = employees::create($request->all());
        return Redirect()->route('employees.index')-> with('success','employee added succesflly');
    }

    public function edit(employees $employees)
    {
        return view('employee.update');

    }

    public function update(Request $request, employees $employees)
    {
        $request->validate([
            'first-name'=>'required',
            'last-name'=>'required',
        ]);
        $employees ->update($request->all());
        return Redirect()->route('employee.index')-> with('success','employee updated succesflly');
    }

    public function destroy(employees $employees)
    {
        $employees -> delete();
        return Redirect()->route('employees.index')-> with('success','employee deleted succesflly');
    }
}
