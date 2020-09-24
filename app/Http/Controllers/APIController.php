<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class APIController extends Controller
{
    
     public function allData(Request $req)
    {
         $user=blog::where('Status','=',1)->get();
        
        if($user->count()){
            return response()->json($data = [
            'status' => 200,
            'msg'=>'Success',
            'user' => $user
            ]);
        }
        else{
            return response()->json($data = [
            'status' => 201,
            'msg' => 'Data Not Found'
            ]);
        }
    }



     public function show( Request $req){ //obj model ka Curd

     	// return response()->json($req->id);

        $user =blog::where('BlogId','=',$req->id)->first();

           // return response()->json($req->id);
    
        if($user){
            return response()->json($data = [
            'status' => 200,
            'msg'=>'Success',
            'user' => $user
            ]);
        }
        else{
            return response()->json($data = [
            'status' => 201,
            'msg' => 'Data Not Found'
            ]);
        }
                                                                                                                                        
    
     }

}
