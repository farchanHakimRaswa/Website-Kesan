<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rfid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RfidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rfids=Rfid::all();
        return view('tagRfid',compact('rfids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rfid = new Rfid();
        $rfid->Rfid_code= $request->get('id_name');
        $rfid->save();
 
        return redirect('rfids')->with('success','Your RFID has been new Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $id=$request->get('id_name');
            $rfid=Rfid::findOrFail($id);
            $last_value=$rfid->Logged_in;
            $rfid->Logged_in=!($last_value);
            $rfid->save();
            if($last_value==1){
                return redirect('rfids')->with('alert','RFID $id has logged in');    
            }
            else{
                return redirect('rfids')->with('alert','RFID $id has logged out');     
            }
            
        }
        catch(ModelNotFoundException $e){
            return redirect('rfids')->with('alert','Your ID not found try register');  
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
