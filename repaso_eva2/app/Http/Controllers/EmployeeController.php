<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employeeList = Employee::all();
        return view('employee.all', ['employeeList'=>$employeeList]);
    }

    public function show($id) {
        $e = Employee::find($id);
        $data['employee'] = $e;
        return view('employee.show', $data);
    }

    public function create() {
        return view('employee.form');
    }

    public function store(Request $r) {
        $e = new Employee();
        $e->name = $r->name;
        $e->surname = $r->surname;
        $e->department = $r->department;
        $e->functions = $r->functions;
        $e->save();
        return redirect()->route('employee.index');
    }

    public function edit($id) {
        $employee = Employee::find($id);
        return view('employee.form', ['employee'=>$employee]);
    }

    public function update($id, Request $r) {
        $e = Employee::find($id);
        $e->name = $r->name;
        $e->surname = $r->surname;
        $e->department = $r->department;
        $e->functions = $r->functions;
        $e->save();
        return redirect()->route('employee.index');
    }

    public function destroy($id) {
        $p = Employee::find($id);
        $p->delete();
        return redirect()->route('employee.index');
    }
}