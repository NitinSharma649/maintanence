<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Warranty;
use Carbon\Carbon;

class ApiController extends Controller
{

    public function CheckWarrantyNumber(Request $request){
        try {
            
            if(!empty($warranty_number = $request->warranty_number)){
                $warranty = Warranty::where('warranty_number', $warranty_number)->get();
                if(count($warranty)>0){
                    $warranty = $warranty->first();
                    $created = Carbon::parse($warranty->valid_to);
                    $now = Carbon::now();
                    $difference = ($created->diff($now)->days < 0) ? false : $created->diffForHumans($now);

                    if($difference){
                        return response()->json(['status'=>200, 'message'=>'success', 'data'=>$warranty, 'diff'=>$difference]);
                    }else{
                        return response()->json(['status'=>201, 'message'=>'Warranty date is expired', 'data'=>$warranty]);
                    }
                }else{
                    return response()->json(['status'=>202, 'message'=>'Please enter Valid Warranty number', 'data'=>$warranty]);
                }
            }else{
                return response()->json(['status'=>400, 'message'=>"params missing"]);
            }
        } catch (\Exception $e) {
            return response()->json(['status'=>500, 'message'=>$e->getMessage()]);
        }
    }
}