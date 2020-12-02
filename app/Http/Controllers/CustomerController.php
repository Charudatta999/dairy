<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\CowController;
use App\Http\Controllers\BuffaloController;
use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Carbon;

class CustomerController extends Controller
{
    public function cust_view(){
        $customer = customer::all();
        return view('dairy.home',compact('customer'));
        
    }
    public function cust_reg(Request $request){
        $time=now();
        $startTime = Carbon::parse($time)->format('yy:m:d');
        $type=$request->type;
          if (customer::where('Cust_Name', '=', $request->name)->where('Cust_Phone','=', $request->number)->exists()) {
                 echo"exits";   
            }
            else{
                $data = array();
                    $data['Cust_Name']=$request->name;
                    $data['Cust_Phone']=$request->number;
                    $data['upi']=$request->upi;
                    $data['created_at']= $startTime;
                    
                    
                 $post=DB::table('customers')->insert($data);
                 if($post){
                      $cust = DB::table('customers')->where('Cust_Name',$request->name)->where('Cust_Phone','=', $request->number)->pluck('id');
                echo $cust;
                foreach($cust as $a){
                              
                    switch($type){
                    case "Cow":
                        echo"cow"," <br> ";
                        $cow_data=array();
                        $cow_data['Cust_ID']=$a;
                        $cow_data['created_at']= $startTime;
                        DB::table('cows')->insert($cow_data);
                        
                    break;
                    
            
                    
                    
                    case "Buffalo":
                        echo'buff';
                        $buff_data=array();
                        $buff_data['Cust_Id']=$a;
                        $buff_data['created_at']= Carbon::parse($time)->format('yy:m:d');
                        
                        DB::table('buffalo')->insert($buff_data);
                        
                    break;

                    
                    case "Both":
                        
                        echo'both';
                        $cow_data=array();
                        $cow_data['Cust_ID']=$a;
                        $buff_data=array();
                        $cow_data['created_at']= $startTime;
                        $buff_data['Cust_Id']=$a;
                        $buff_data['created_at']= $startTime;
                        DB::table('buffalo')->insert($buff_data);
                        DB::table('cows')->insert($cow_data);
                        
                    break;
                    
                }                               
            }
                 }
            }

    }
    public function cust_update(Request $request){
        
        
        
    }
    public function try(){
         $time=now();

        $startTime = Carbon::parse($time)->format('yy:m:d');
        echo $startTime;
    }
}
