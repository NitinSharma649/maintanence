<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Session;
use App\Maintenance;
use App\Job;
use App\Warranty;

class AssignJobController extends BaseController
{
    public function __construct(){

    }

    public function index($complaint_id){
        $maintenance = Maintenance::find($complaint_id);
        $employees = User::where('role_id', 2)->where('postal_code', $maintenance->postal_code)->get();
        return view('panel.website.assign_job.index', compact('employees','maintenance'));
    }

    public function create(){
        $roles = Role::get();
        return view('panel.website.assign_job.edit-create', compact('roles'));
    }

    public function store(Request $request){
        $employees = explode(',', $request->employee_id);
        $warrenty = Warranty::where('warranty_number', $request->warranty_number)->get();
        $complaint = Maintenance::find($request->complaint_id);
        if(count($warrenty)>0){

            foreach($employees as $employee_id){
                $job= new Job();
                $job->complaint_id = $complaint->id;
                $job->engineer_id = $employee_id;
                $job->warranty_id = $warrenty->first()->id;
                $job->save();
            }
            return redirect()->back()->with('success', "Assign Job Added Successfully");
        }else{
            return redirect()->back()->with('error', "Something Went Wrong");
        }
    }

    public function show(User $employee){
        return redirect()->route('panel.assign_job.show');
    }

    public function edit(User $employee){
        
        return view('panel.website.assign_job.edit-create', ['user'=>$employee]);
    }
    
    public function update(Request $request, User $employee){
        
        return redirect()->route('panel.assign_job.index')->with('success', "Assign Job Updated Successfully");
    }

    public function destroy(Request $request, User $employee){
        if($employee->delete()){
            return redirect()->route('panel.assign_job.index')->with('success', "Assign Job Deleted Successfully");
        }else{
            return redirect()->back()->with('error', "Something went wrong");
        }
    }
}
