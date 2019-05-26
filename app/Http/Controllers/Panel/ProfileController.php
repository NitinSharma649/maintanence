<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;

class ProfileController extends Controller
{
    public function __construct(){

    }

    public function index($role=null)
    {        
        $user = User::find(Auth::guard('panel')->user()->id);
        return view('panel.website.profile.show', compact('user'));
    }

    public function create(){
        $roles = Role::get();
        return view('panel.website.profile.edit-create', compact('roles'));
    }

    public function store(Request $request){
        return redirect()->back()->with('success', "profile Added Successfully");
    }

    public function show(User $profile){
        return view('panel.website.profile.show', ['user'=>$profile]);
    }

    public function edit(User $profile){
        return view('panel.website.profile.edit-create');
    }
    
    public function update(Request $request, User $profile){
        $profile->update($request->all());
        return redirect()->back()->with('success', "profile Updated Successfully");
    }

    public function destroy(Request $request, User $profile){
        return redirect()->back()->with('success', "profile Deleted Successfully");
    }

}
