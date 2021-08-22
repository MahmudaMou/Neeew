<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posmitems;

class ApiPosms extends Controller
{
    public function creat(Request $request)
   {
       $posms = new Posmitems();
       $posms->itemname = $request->itemname;
       $posms->amount = $request->amount;
       $result=$posms->save();
       if($result)
       {
           return["result"=>"Data has been saved"];
       }
       else
       {
        return["result"=>"Operation failed"];
       }
   }
   public function show()
   {
    $posms = Posmitems::all();
    return response()->json($posms); 
   }
   public function showbyid($id)
   {
    $posms = Posmitems::find($id);
    return response()->json($posms);
   }

   public function updatebyid(Request $request,$id)
   {
       $posms = Posmitems::find($id);
       $posms->itemname = $request->input('itemname');
       $posms->amount = $request->input('amount');
       $result=$posms->save();
       if($result)
       {
           return["result"=>"Data has been Updated"];
       }
       else
       {
        return["result"=>"Operation failed"];
       }
   }
   public function deletebyid(Request $request,$id)
   {
          $posms = Posmitems::find($id);
          $posms->delete();
          return response()->json($posms);
   }
}
