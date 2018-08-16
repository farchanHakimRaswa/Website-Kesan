<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rfid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateController extends Controller{
	public function update(Request $request)
    {
        try{
            $rfid_number=$request->get('id_name');
            $rfid=Rfid::where('Rfid_code',$rfid_number)->first();
         
            if($rfid==null){
            	return redirect('rfids')->with('fail','Your ID not found try register');
            }
            ///*
            $last_value=$rfid->Logged_in;
            $rfid->Logged_in=!($last_value);
          

            if($last_value==1){
            	$rfid->Logged_out_at=Carbon::now()->format('Y-m-d H:i:s');
            	$rfid->save();
                return redirect('rfids')->with('alert','RFID $rfid_number has logged out');    
            }
            else{
            	$rfid->Logged_in_at=Carbon::now()->format('Y-m-d H:i:s');
            	$rfid->Logged_out_at=null;
            	$rfid->save();
                return redirect('rfids')->with('alert','RFID $rfid_number has logged in');     
            }
            //*/
		}
		catch(ModelNotFoundException $e){
            return redirect('rfids')->with('fail','Your ID not found try register');  
        }
	}
}
