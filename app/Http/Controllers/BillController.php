<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use App\Models\bill;
use Illuminate\Support\Carbon;

class BillController extends Controller
{
    public function create(Request $request){
        $time=now();
        $current_Time = Carbon::parse($time)->format('yy:m:d');
        $type=$request->Milk_type;
        $Cust_Id=$request->Cust_Name;
        $quantity=$request->quantity;
        $quantity=$request->fat;

        
                
                              
                    switch($type){
                        
                        
                    case "cow":
                        
                        
                    break;
                    
            
                    
                    
                    case "buffalo":
                        
                        
                        
                    break;

                    
                  
                    
                   
                 }
                                            
            
            }

    
        
        
    }
