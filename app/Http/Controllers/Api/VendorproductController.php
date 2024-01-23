<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use \Illuminate\Database\Capsule\Manager;
use Hash;
use App\Traits\SendMail;

class VendorproductController extends Controller
{
use SendMail;

       public function salon_products(Request $request)
    { 
       $lat = $request->lat;
       $lng = $request->lng;
       $seachstring= $request->searchstring;
       $user_id = $request->user_id;
        $lang = $request->lang;

       if($user_id != NULL){
     if($lang!=NULL){
         $product = DB::table('shop_product')
                   ->join('vendor','shop_product.vendor_id','=','vendor.vendor_id')
                   ->leftJoin('product_order_details','shop_product.id','=','product_order_details.product_id')
                    ->select('shop_product.id','shop_product.'.$lang.'_product_name as product_name','shop_product.product_image','shop_product.price','shop_product.quantity','shop_product.'.$lang.'_description as description','shop_product.created_at','shop_product.updated_at','shop_product.vendor_id','vendor.vendor_name','vendor.delivery_range',DB::raw("6371 * acos(cos(radians(".$lat . ")) 
                    * cos(radians(vendor.lat)) 
                    * cos(radians(vendor.lng) - radians(" . $lng . ")) 
                    + sin(radians(" .$lat. ")) 
                    * sin(radians(vendor.lat))) AS distance"))
                  ->orderBy('distance')
                  ->where('vendor.online_status','ON')
                   ->where('vendor.admin_approval',1)
                  ->where('shop_product.product_name', 'like', $seachstring.'%')
                  ->paginate(5);
     }else{
           $product = DB::table('shop_product')
                   ->join('vendor','shop_product.vendor_id','=','vendor.vendor_id')
                   ->leftJoin('product_order_details','shop_product.id','=','product_order_details.product_id')
                    ->select('shop_product.id','shop_product.product_name','shop_product.product_image','shop_product.price','shop_product.quantity','shop_product.description','shop_product.created_at','shop_product.updated_at','shop_product.vendor_id','vendor.vendor_name','vendor.delivery_range',DB::raw("6371 * acos(cos(radians(".$lat . ")) 
                    * cos(radians(vendor.lat)) 
                    * cos(radians(vendor.lng) - radians(" . $lng . ")) 
                    + sin(radians(" .$lat. ")) 
                    * sin(radians(vendor.lat))) AS distance"))
                  ->orderBy('distance')
                  ->where('vendor.online_status','ON')
                   ->where('vendor.admin_approval',1)
                  ->where('shop_product.product_name', 'like', $seachstring.'%')
                  ->paginate(5);
     }         
                  
         if(count($product)>0){ 
             $result =array();
            $i = 0;
           $j=0;
            foreach ($product as $cats) {
                
                array_push($result, $cats);
                $app = json_decode($cats->id);
                $apps = array($app);
                 $app = DB::table('product_order_details')
                 ->select('qty')
                  ->where('product_id',$cats->id)
                  ->where('user_id',$user_id)
                  ->where('status','incart')
                  ->first();
                  if($app){
                   $result[$i]->cart_qty = $app->qty;
                  
                  }else{
                     $result[$i]->cart_qty = 0; 
                  }
                   
                    $wish= DB::table('wishlist')
                  ->where('product_id',$cats->id)
                  ->where('user_id',$user_id)
                  ->first();
                    
                     if($wish){
                      $result[$i]->isFavourite = true;  
                     }else{
                       $result[$i]->isFavourite = false;    
                     }
                       $i++;
                 }
                 
                
         }
       }else{
     if($lang!=NULL){
         $product = DB::table('shop_product')
                   ->join('vendor','shop_product.vendor_id','=','vendor.vendor_id')
                    ->select('shop_product.id','shop_product.'.$lang.'_product_name as product_name','shop_product.product_image','shop_product.price','shop_product.quantity','shop_product.'.$lang.'_description as description','shop_product.created_at','shop_product.updated_at','shop_product.vendor_id','vendor.vendor_name','vendor.delivery_range',DB::raw("6371 * acos(cos(radians(".$lat . ")) 
                    * cos(radians(vendor.lat)) 
                    * cos(radians(vendor.lng) - radians(" . $lng . ")) 
                    + sin(radians(" .$lat. ")) 
                    * sin(radians(vendor.lat))) AS distance"))
                  ->orderBy('distance')
                  ->where('online_status','ON')
                   ->where('admin_approval',1)
                  ->where('shop_product.product_name', 'like', $seachstring.'%')
                  ->paginate(5);
     }else{
       $product = DB::table('shop_product')
                   ->join('vendor','shop_product.vendor_id','=','vendor.vendor_id')
                    ->select('shop_product.id','shop_product.product_name','shop_product.product_image','shop_product.price','shop_product.quantity','shop_product.description','shop_product.created_at','shop_product.updated_at','shop_product.vendor_id','vendor.vendor_name','vendor.delivery_range',DB::raw("6371 * acos(cos(radians(".$lat . ")) 
                    * cos(radians(vendor.lat)) 
                    * cos(radians(vendor.lng) - radians(" . $lng . ")) 
                    + sin(radians(" .$lat. ")) 
                    * sin(radians(vendor.lat))) AS distance"))
                  ->orderBy('distance')
                  ->where('online_status','ON')
                   ->where('admin_approval',1)
                  ->where('shop_product.product_name', 'like', $seachstring.'%')
                  ->paginate(5);
     }
                   if(count($product)>0){ 
             $result =array();
            $i = 0;
          
            foreach ($product as $cats) {
                array_push($result, $cats);
                $app = json_decode($cats->id);
                  $result[$i]->cart_qty = 0; 
                  
                  $result[$i]->isFavourite = false;
                   $i++; 
                 }
         }
       }     
     
           $nearbystore = $product->unique('id');        
          
       
          $pr = NULL;
        foreach($nearbystore as $store)
        {
            if($store->delivery_range >= $store->distance)  {  
           
                $pr[] = $store; 
            }
            
        } 
         if($pr != NULL){ 
            $message = array('status'=>'1', 'message'=>'Products Found at your location', 'data'=>$pr);
            return $message;
           }
           else{
                $message = array('status'=>'0', 'message'=>'No locations nearby registered to offer that service yet.');
            return $message;
           }
    }
    
    
    public function service_salons(Request $request)
    { 

        $validated = $request->validate([
            'service_name' => 'required|string'
        ]);

        
        $service_name = $validated['service_name'];


        $lang = DB::table('langs')
              ->get();
        if(count($lang)>0){          
            foreach($lang as $langs){
                $check= DB::table('service')
                    ->select('service_name')
                      ->where($langs->lang_prefix.'_service_name', $service_name)
                      ->first();
                      
                if($check){
                    $service_name=$check->service_name;
                }      
            } 
        }

        $lat = $request->lat;
        $lng = $request->lng;

      // Distance is calculated in Km

         $product = DB::table('service')
                    ->join('vendor','service.vendor_id','=','vendor.vendor_id')
                    ->select('vendor.vendor_id','vendor.delivery_range', 'vendor.vendor_name','vendor.owner','vendor.vendor_email','vendor.vendor_phone','vendor.vendor_logo',
                    'vendor.vendor_loc','vendor.lat','vendor.lng','vendor.opening_time','vendor.closing_time','vendor.shop_type', DB::raw("6371 * acos(cos(radians(".$lat . ")) 
                    * cos(radians(vendor.lat)) 
                    * cos(radians(vendor.lng) - radians(" . $lng . ")) 
                    + sin(radians(" .$lat. ")) 
                    * sin(radians(vendor.lat))) AS distance"))
                  ->where('service.service_name', '=', '?')
                  ->where('vendor.online_status', '=', '?')
                  ->where('vendor.admin_approval', '=', '?')
                  ->orderBy('distance')
                  ->setBindings([$service_name, 'ON', 1])
                  ->paginate(5);
          
          $prr = $product->unique('vendor_id');
          
          $availocation = array();
          if($prr != NULL){
            foreach ($prr as $location){
              if($location->delivery_range > $location->distance){
                $availocation[] = $location;
              }
            }
            if($availocation > 0){
              return array('status'=>'1', 'message'=>'Locations where service is available:', 'data'=>$availocation);
            }else{
              return array('status'=>'0', 'message'=>'No locations nearby registered to offer that service yet.');
            }
          }else{
            return array('status'=>'0', 'message'=>'No locations nearby registered to offer that service yet.');
          }        
    }
    
    
    public function similar_salon(Request $request)
    { 
        $vendor_id = $request->vendor_id;
        $description = DB::table('vendor')
                     ->select('description','shop_type')
                     ->where('vendor_id', $vendor_id)
                     ->first();
        
       
                     
        $lat = $request->lat;
       $lng = $request->lng;
       $nearbystore = DB::table('vendor')
                    ->select('vendor_name','owner','vendor_id','vendor_email','vendor_phone','vendor_logo','vendor_loc','lat','lng','opening_time','closing_time','delivery_range','shop_type',DB::raw("6371 * acos(cos(radians(".$lat . ")) 
                    * cos(radians(lat)) 
                    * cos(radians(lng) - radians(" . $lng . ")) 
                    + sin(radians(" .$lat. ")) 
                    * sin(radians(lat))) AS distance"))
                  ->orderBy('distance')
                  ->where('online_status','ON')
                  ->where('admin_approval',1)
                   ->where('vendor_id','!=', $vendor_id)
                  ->where('shop_type',$description->shop_type)
                  ->get();
 
          $pr = NULL;
        foreach($nearbystore as $store)
        {
            if($store->delivery_range >= $store->distance)  {  
           
                $pr[] = $store; 
            }
            
        }
        if($pr != NULL){ 
            $message = array('status'=>'1', 'message'=>'Locations found available:', 'data'=>$pr);
            return $message;
           }
           else{
                $message = array('status'=>'0', 'message'=>'No locations nearby registered to offer that service yet.');
            return $message;
           }
               
    }
   
}