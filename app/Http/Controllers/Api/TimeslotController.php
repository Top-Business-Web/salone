<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\App;
use Jenssegers\Date\Date;

class TimeslotController extends Controller
{
/**
 *  Function Name: Timeslot
 *  Params: Request Object $request
 *  Description: Return Time Slot  for a service in a ($selected_date) for a service ($staff_id) and a vendor ($vendor_id).
 *               It will request if bookings for ($selected_date). If not, will check availability for the next hour if possible ($avail_hour)
 * 
 *  Returns: Array ('status'=>' 0:Timeslot not available | 1: Available for some records, 'message'=> Message returned for request, ['data']=> If there data fetched for request)
**/
    public function timeslot(Request $request)
    {
        /* \date_default_timezone_set('America/El_Salvador'); */
        $locale = config('app.locale');
        Date::setLocale($locale);

        $vendor_id = $request->vendor_id;       
        $staff_id = $request->staff_id;
        $current_time = Carbon::Now();
        $date = date('Y-m-d');

        $staff_profile = DB::table('staff_profile')
                                ->where('staff_id', $staff_id)
                                ->first();

        if(!$staff_profile) return array('status'=>'0', 'message'=>'Staff required is not available or not exists yet.');
        
        $selected_date = $request->selected_date;
        
        $sday = new Date(strtotime($selected_date));
        $day = ucfirst($sday->format('l'));
        $time_slot = DB::table('time_slot')
                   ->where('vendor_id',$vendor_id)
                   ->where('days',$day)
                   ->first();
        
        if($time_slot){
            $date2time = strtotime($date);
            $sdate2time = strtotime($selected_date);

            if($sdate2time < $date2time){
                return array('status'=>'0', 'message'=>"You can't select a past date");
            }else{
                if($sdate2time > $date2time){
                    $book_hours=(strtotime($selected_date." ".$time_slot->close_hour)-strtotime($selected_date." ".$time_slot->open_hour))/3600;
                    $avail_hour = $time_slot->open_hour;
                } else {
                    $next_hour = new Date('+1 hour');
                    $next_hour->minute = 0;
                    $avail_hour=$next_hour->format('H:i');
                    
                    if($avail_hour > $time_slot->open_hour){
                        if($avail_hour < $time_slot->close_hour){
                            $book_hours=(strtotime($time_slot->close_hour) - strtotime($avail_hour))/3600;
                        } else {
                            return array('status'=>'0', 'message'=>'Time is up for today. Try a reservation for tomorrow.');
                        }
                    } else {
                        $book_hours=(strtotime($selected_date." ".$time_slot->close_hour)-strtotime($selected_date." ".$time_slot->open_hour))/3600;
                        $avail_hour = $time_slot->open_hour;
                    }
                }

                for($i = 1; $i <= $book_hours; $i++){
                    if($i==1) $startH = strtotime($avail_hour);    
                    $nextH = $startH + 3600;
                    $timeslot [] = array('timeslot'=>date('g:i a', $startH)." - ".date('g:i a', $nextH), 'availability'=>"true");
                    $startH = $nextH;
                }
                
                $bookings = DB::table('orders')
                                ->select('service_time')
                                ->where('service_date', '=', $selected_date)
                                ->where('vendor_id', $vendor_id)
                                ->where('staff_id', $staff_id)
                                ->get();

                if(!$bookings->isEmpty()){
                    foreach($bookings as $key=>$record){
                        foreach($timeslot as $i=>$response){
                            if($record->service_time == $response['timeslot']){
                                $timeslot[$i]['availability'] = "false";
                            }
                        }
                    }
                    return array('status'=>'1', 'message'=>'Present time Slot', 'data'=>$timeslot);
                } else {
                    return array('status'=>'1', 'message'=>'Present time Slot', 'data'=>$timeslot);
                }
            }
        } else {
            return array('status'=>'0', 'message'=>'Time Slot not defined by vendor. Is not possible to know if service is available');
        }
    }   
}