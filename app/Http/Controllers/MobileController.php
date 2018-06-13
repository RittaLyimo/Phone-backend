<?php

namespace App\Http\Controllers;
use App\Mobile_operator ;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function CheckOperator(Request $request){
        $code = $request->code ;
        $operator = Mobile_operator::where('MO_codenumber',$code)->first();
        if(!$operator){
            return response()->json(['message'=> "No such mobile operator's code"],401);
        }
        else{
            return response()->json(["operator" =>$operator],200);
        }
    }

}
