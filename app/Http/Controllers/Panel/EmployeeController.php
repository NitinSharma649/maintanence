<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Session;

class EmployeeController extends BaseController
{
    public function __construct(){

    }

    public function index(){
        $employees = User::where('role_id', 2)->orderBy('id','desc')->get();
        return view('panel.website.employee.index', compact('employees'));
    }

    public function create(){
        $roles = Role::get();
        return view('panel.website.employee.edit-create', compact('roles'));
    }

    public function store(Request $request){
        $employee = new User($request->all());
        $employee->password =  \bcrypt($request->password);
        $employee->save();
        return redirect()->route('panel.employee.index')->with('success', "Employee Added Successfully");
    }

    public function show(User $employee){
        return redirect()->route('panel.employee.show');
    }

    public function edit(User $employee){
        dd($employee);
        return view('panel.website.employee.edit-create', ['user'=>$employee]);
    }
    
    public function update(Request $request, User $employee){
        $employee->update($request->all());
        return redirect()->route('panel.employee.index')->with('success', "Employee Updated Successfully");
    }

    public function destroy(Request $request, User $employee){
        if($employee->delete()){
            return redirect()->route('panel.employee.index')->with('success', "Employee Deleted Successfully");
        }else{
            return redirect()->back()->with('error', "Something went wrong");
        }
    }
}
