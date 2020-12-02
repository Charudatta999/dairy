<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dairy;
use App\Models\customer;
use DB;

class DairyController extends Controller
{
        public function store(Request $request){
            $data = array();
            $data['Type'] = $request -> type;
            $data['Name']=$request-> customer_name;
            $data['Time']=$request-> time;
            $data['Quantity']=$request-> milk_quantity; 
            $data['Fat']=$request-> fat;
             
            

            
            
        return $data;


    }
    public function daily_entry(){
        $customers= DB::table('customers')->get()->all();

         return view('dairy.entry',compact('customers'));        
    }
     public function drop_type($Cust_Id){
         $data = array();
                if(DB::table('cows')->where("Cust_ID",$Cust_Id)->exists() && DB::table('buffalo')->where("Cust_Id",$Cust_Id)->exists() ){
                    $data['type']='cow';
                    $data['type1']='buffalo';
                    
                    
                     return response()->json ($data);
                }
                elseif(DB::table('cows')->where("Cust_ID",$Cust_Id)->exists() ){
                    $data['type']='cow';
                    return response()->json ($data);
                }
                elseif(DB::table('buffalo')->where("Cust_ID",$Cust_Id)->exists() ){
                    $data['type']='buffalo';
                    return response()->json ($data);
                }
                
                //  $states = DB::table('cows')->where("Cust_ID",$Cust_Id)->get()->pluck("id");
                // return response()->json($states);
         
         
        
    }
}
