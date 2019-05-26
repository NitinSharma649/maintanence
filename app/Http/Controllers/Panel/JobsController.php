<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Job;
use Auth;   

class JobsController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $jobs = Job::where('engineer_id', Auth::guard('panel')->user()->id)->get();
        return view('panel.website.jobs.index', compact('jobs'));
    }

    public function create(){
        $roles = Role::get();
        return view('panel.website.jobs.edit-create', compact('roles'));
    }

    public function store(Request $request){
        return redirect()->route('panel.jobs.index')->with('success', "jobs Added Successfully");
    }

    public function show($jobs){
        // return redirect()->route('panel.jobs.show');
    }

    public function edit($jobs){
        return view('panel.website.jobs.edit-create');
    }
    
    public function update(Request $request, $jobs){
        return redirect()->route('panel.jobs.index')->with('success', "jobs Updated Successfully");
    }

    public function destroy(Request $request, $jobs){
        return redirect()->route('panel.jobs.index')->with('success', "jobs Deleted Successfully");
    }
    public function changeStatus(Request $request, $jobs ,$status){
        Job::where('id', $jobs)->update(['status'=> $status]);
        return redirect()->back()->with('success', "Status has been changed");
    }
}
