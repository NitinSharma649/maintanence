<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;

class EmployeeController extends BaseController
{
    public function __construct(){

    }

    public function index(){
        $employees = User::where('role_id', 2)->get();
        return view('panel.website.employee.index', compact('employees'));
    }

    public function create(){
        $roles = Role::get();
        return view('panel.website.employee.edit-create', compact('roles'));
    }

    public function store(Request $request){
        return redirect()->route('panel.employee.index')->with('success', "Employee Added Successfully");
    }

    public function show($employee){
        return redirect()->route('panel.employee.show');
    }

    public function edit($employee){
        return view('panel.website.employee.edit-create');
    }
    
    public function update(Request $request, $employee){
        return redirect()->route('panel.employee.index')->with('success', "Employee Updated Successfully");
    }

    public function destroy(Request $request, $employee){
        return redirect()->route('panel.employee.index')->with('success', "Employee Deleted Successfully");
    }
}
