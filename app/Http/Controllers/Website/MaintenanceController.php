<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Maintenance;
use Session;

class MaintenanceController extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('website.maintenance');
    }

    public function store(Request $request){
        $maintence = new Maintenance($request->all());
        $maintence->save();
        return redirect()->back()->with('success', "Maintence Request Succssfully submit, We will contact you as soon as possible");
    }
}
