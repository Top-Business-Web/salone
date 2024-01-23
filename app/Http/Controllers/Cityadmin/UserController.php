<?php

namespace App\Http\Controllers\Cityadmin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;
use App\Setting;

class UserController extends Controller
{
    public function allusers(Request $request)
    {
        $cityadmin_email=Session::get('cityadmin');
        $cityadmin=DB::table('cityadmin')
        ->where('cityadmin_email',$cityadmin_email)
        ->first();
        $cityadmin_id = $cityadmin->cityadmin_id;		

        $alluser = DB::table('users')
        ->paginate(10);
        return view('cityadmin.user.alluser',compact("cityadmin_email","alluser","cityadmin"));
    }
    
         public function block(Request $request)
    {
      if(Setting::valActDeMode()) return redirect()->back()->withErrors(trans('keywords.Active_Demo_Mode'));    
        $user_id = $request->id;
         $users = DB::table('users')
                ->where('id',$user_id)
                ->update(['block'=>1]);
    if($users){   
    return redirect()->back()->withSuccess('User Blocked Successfully');
    }
    else{
      return redirect()->back()->withErrors('Something Wents Wrong');   
    }
    }
    
     public function unblock(Request $request)
    {
        if(Setting::valActDeMode()) return redirect()->back()->withErrors(trans('keywords.Active_Demo_Mode'));
        $user_id = $request->id;
         $users = DB::table('users')
                ->where('id',$user_id)
                ->update(['block'=>0]);
                
     if($users){   
    return redirect()->back()->withSuccess('User Unblocked Successfully');
    }
    else{
      return redirect()->back()->withErrors('Something Wents Wrong');   
    }
    }
    
     public function del_user(Request $request)
    {
        if(Setting::valActDeMode()) return redirect()->back()->withErrors(trans('keywords.Active_Demo_Mode'));
        $user_id = $request->id;
         $users = DB::table('users')
                ->where('id',$user_id)
                ->delete();
                
      if($users){           
        return redirect()->back()->withSuccess('Deleted Successfully');
      } else {
        return redirect()->back()->withErrors('Something Wents Wrong');   
      }
    }
	
    
}
