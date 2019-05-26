<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\Maintenance;
class ComplaintController extends BaseController
{
    public function __construct(){

    }

    public function index(){
        $complaints = Maintenance::where('status', 0)->get();
        return view('panel.website.complaint.index', compact('complaints'));
    }

    public function create(){
        $roles = Role::get();
        return view('panel.website.complaint.edit-create', compact('roles'));
    }

    public function store(Request $request){
        return redirect()->route('panel.complaint.index')->with('success', "complaint Added Successfully");
    }

    public function show($complaint){
        // return redirect()->route('panel.complaint.show');
    }

    public function edit($complaint){
        return view('panel.website.complaint.edit-create');
    }
    
    public function update(Request $request, $complaint){
        return redirect()->route('panel.complaint.index')->with('success', "complaint Updated Successfully");
    }

    public function destroy(Request $request, $complaint){
        return redirect()->route('panel.complaint.index')->with('success', "complaint Deleted Successfully");
    }
}
