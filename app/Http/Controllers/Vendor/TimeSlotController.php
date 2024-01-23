<?php

namespace App\Http\Controllers\vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use App\Setting;

class TimeSlotController extends Controller
{
    public $login_check_message = 'please login first';

    public function timeslot(Request $request)
    {
        if(Session::has('vendor')){
            $vendor_email=Session::get('vendor');
            
            $vendor=DB::table('vendor')->where('vendor_email',$vendor_email)->first();
            /*$vendor_id = $vendor->vendor_id;
            $time = DB::table('time_slot')->where('vendor_id',$vendor_id)->get();
            if($time->count()==0){
                $time_dup[0] = ['open_hour'=>'10:00','close_hour'=>'20:00','days'=>'Monday','vendor_id'=>$vendor_id];
                $time_dup[1] = ['open_hour'=>'10:00','close_hour'=>'20:00','days'=>'Tuesday','vendor_id'=>$vendor_id];
                $time_dup[2] = ['open_hour'=>'10:00','close_hour'=>'20:00','days'=>'Wednesday','vendor_id'=>$vendor_id];
                $time_dup[3] = ['open_hour'=>'10:00','close_hour'=>'20:00','days'=>'Thursday','vendor_id'=>$vendor_id];
                $time_dup[4] = ['open_hour'=>'10:00','close_hour'=>'20:00','days'=>'Friday','vendor_id'=>$vendor_id];
                $time_dup[5] = ['open_hour'=>'10:00','close_hour'=>'20:00','days'=>'Saturday','vendor_id'=>$vendor_id];
                $time_dup[6] = ['open_hour'=>'10:00','close_hour'=>'20:00','days'=>'Sunday','vendor_id'=>$vendor_id];
                DB::table('time_slot')->insert($time_dup);
            }*/
            
            $time = DB::table('time_slot')->where('vendor_id',$vendor->vendor_id)->get();
            
                    
            return view('vendor.time_slot.time_slot', compact("vendor_email",'vendor','time'));    
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }
            
        
        
    }
    public function addtimeslot(Request $request)
    {
        if(Session::has('vendor')){
            $vendor_email=Session::get('vendor');
            
                        $vendor=DB::table('vendor')
                        ->where('vendor_email',$vendor_email)
                        ->first();
                    
                    
            return view('vendor.time_slot.addtime_slot', compact("vendor_email",'vendor'));    
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }   
    }

    public function addnewtimeslot(Request $request)
    {
        if(Setting::valActDeMode()) return redirect()->back()->withErrors(trans('keywords.Active_Demo_Mode'));
        if(Session::has('vendor')){
            $vendor_email=Session::get('vendor');
            
            $vendor=DB::table('vendor')
            ->where('vendor_email',$vendor_email)
            ->first();
            $vendor_id =  $vendor->vendor_id;
            $open_hrs = $request->open_hour;
            $close_hrs = $request->close_hour;
            $day = $request->day;
            

            DB::table('time_slot')
                        ->insert([
                            'open_hour'=>$open_hrs,
                            'close_hour'=>$close_hrs,
                            'days'=>$day,
                            'vendor_id'=>$vendor_id
                            ]);
        
            return redirect()->back()->withErrors('insert Successfully');
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }
    }

    public function edittimeslot(Request $request)
    {
            if(Session::has('vendor')){
                $vendor_email=Session::get('vendor');

                        $vendor=DB::table('vendor')
                        ->where('vendor_email',$vendor_email)
                        ->first();
                        $time_slot_id=$request->id;

                        $time= DB::table('time_slot')
                        ->where('time_slot_id',$time_slot_id)
                        ->first();

                return view('vendor.time_slot.edittime_slot', compact("vendor_email",'vendor','time'));
            } else {
                return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
            }    
    }

    public function timeslotupdate(Request $request)
    {
        if(Setting::valActDeMode()) return redirect()->back()->withErrors(trans('keywords.Active_Demo_Mode'));
        if(Session::has('vendor')){
            $time_slot_id = $request->time_slot_id;
            $open_hrs = $request->open_hour;
            $close_hrs = $request->close_hour;
            $days = $request->days;
            $status = $request->status;

            

             DB::table('time_slot')
                    ->where('time_slot_id',$time_slot_id)
                    ->update([
                        'open_hour'=>$open_hrs,
                        'close_hour'=>$close_hrs,
                        'days'=>$days,
                        'status'=>$status

                        ]);
     
            return redirect()->back()->withErrors('Updated Successfully');
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }

    }

    
    public function deletetimeslot(Request $request)
    {
        if(Setting::valActDeMode()) return redirect()->back()->withErrors(trans('keywords.Active_Demo_Mode'));
        if(Session::has('vendor')){
            $delete=DB::table('time_slot')->where('time_slot_id',$request->id)->delete();
            if($delete){
                return redirect()->back()->withErrors('delete successfully');
            } else {
                return redirect()->back()->withErrors('unsuccessfull delete'); 
            }
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }

}


    
    
    
    /*============================= Staff Availability Codes ==============================*/
    
    public function staff_timeslot(Request $request)
    {
        if(Session::has('vendor')){
            $vendor_email=Session::get('vendor');
            
            $vendor=DB::table('vendor')->where('vendor_email',$vendor_email)->first();
            $time_slot = DB::table('staff_availability_time_slot')->where('vendor_id',$vendor->vendor_id)->get();
            $data['vendor'] = $vendor;
            $data['time_slot'] = $time_slot;
            return view('vendor.time_slot.staff_time_slot', $data);    
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }
    }
    public function staff_addtimeslot(Request $request)
    {
        if(Session::has('vendor')){
            $vendor_email=Session::get('vendor');
        
                    $vendor=DB::table('vendor')
                    ->where('vendor_email',$vendor_email)
                    ->first();
                
                
            return view('vendor.time_slot.staff_addtime_slot', compact("vendor_email",'vendor'));    
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }
    }

    public function staff_addnewtimeslot(Request $request)
    {
        if(Setting::valActDeMode()) return redirect()->back()->withErrors(trans('keywords.Active_Demo_Mode'));
        if(Session::has('vendor')){
            $vendor_email=Session::get('vendor');
            $vendor=DB::table('vendor')->where('vendor_email',$vendor_email)->first();
            $vendor_id =  $vendor->vendor_id;
            $open_hrs = $request->open_hour;
            $close_hrs = $request->close_hour;

            DB::table('staff_availability_time_slot')
                    ->insert([
                        'open_hour'=>$open_hrs,
                        'close_hour'=>$close_hrs,
                        'vendor_id'=>$vendor_id,
                        'created_at'=>date('Y-m-d H:i:s'),
                        ]);
     
            return redirect()->back()->withErrors('Inserted Successfully');
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }
    }

    public function staff_edittimeslot(Request $request)
    {
        if(Session::has('vendor')){
            $vendor_email=Session::get('vendor');
            $vendor=DB::table('vendor')->where('vendor_email',$vendor_email)->first();
            $time_slot_id=$request->id;

            $time= DB::table('staff_availability_time_slot')->where('id',$time_slot_id)->first();
                    
            return view('vendor.time_slot.staff_edittime_slot', compact("vendor_email",'vendor','time'));    
        } else {
            return redirect()->route('vendorlogin')->withErrors($this->login_check_message);
        }
        
        
    }

  

    
    
    
    
    
}