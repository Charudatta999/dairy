<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rates;
use DB;
class RatesController extends Controller
{
    public function create(){
        $rates = rates::paginate(10);

        return view('rates.ratein',compact('rates'));
    }
    public function store(Request $request){
        $type= $request->type;
        switch($type){
            case 'cow':
                $cow_data=array();
                $cow_data['Cow_Rates']=$request->rate;
                DB::table('rates')->where('Fat',$request->fata)->update($cow_data);

            break;
            case 'buffalo':
                $buff_data=array();
                $buff_data['Buffalo_Rates']=$request->rate;
                 DB::table('rates')->where('Fat',$request->fata)->update($buff_data);
                
            break;        
            
        }
        $rates = rates::paginate(10);
        
        echo $request->fata;
        return view('rates.ratein',compact('rates'));  
        
    }
}
