@extends('cityadmin.layout.app')

@section('preload-section')
<link href="{{url('assets/select/styles/multiselect.css')}}" rel="stylesheet"/>
<script src="{{url('assets/select/scripts/multiselect.min.js')}}"></script>
<style>
sup {
    color:red;
    position: initial;
    font-size: 111%;
}
#testSelect1_multiSelect {
			width: 100%;
		}
	.multiselect-wrapper .multiselect-list {
    padding: 5px;
    min-width: 91%;
  }
</style>
@endsection

@section ('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ __('keywords.Upd_Coupon')}}</h4>
                   @if (count($errors) > 0)
                      @if($errors->any())
                        <div class="alert alert-primary" role="alert">
                          {{$errors->first()}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                      @endif
                  @endif
                  <form class="forms-sample" action="{{route('updatecoupon')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="form-group">
                    <label for="exampleFormControlSelect3">{{ __('keywords.Choose_Vendor')}}</label><br>
                  
                    
                    <select id="testSelect1" style="border:1px solid gray" name="vendor_id[]" class="form-control" multiple requirement>
                                           <?php 
                                               foreach($coupon_vendor as $vendor_assigns){
                                                   $vendor_id[] =  $vendor_assigns->vendor_id;
                                               }
                                                foreach($vendors as $store)
                                                {?>
                                        <option value="<?= $store->vendor_id ?>" <?php if(in_array($store->vendor_id, $vendor_id)){ echo "selected"; } ?>><?= $store->vendor_name ?></option>
                                                                                    <?php } ?>
                                        </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Name')}}<sup>*</sup></label>
                      <input type="hidden" name="coupon_id"  value="{{$coupon->coupon_id}}">
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$coupon->coupon_name}}" name="coupon_name" placeholder="Enter product name">
                    </div>
                      @foreach($lang as $langs)
                              <?php $tex = $langs->lang_prefix.'_coupon_name' ?>
                     <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Name')}} in {{$langs->lang_name}}<sup>*</sup></label>
                      <input type="text" class="typeahead form-control" id="exampleInputName1" name="{{$tex}}" value="{{$coupon->$tex}}" required>
                    </div>
                    @endforeach
                    
                
                <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Code')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$coupon->coupon_code}}"  name="coupon_code" maxlength="6" placeholder="Coupon Code">
                    </div>
                   
                 <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Desc')}} </label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$coupon->coupon_description}}" name="coupon_desc" placeholder="{{ __('keywords.Coupon_Desc')}} ">
                    </div>  
                     @foreach($lang as $langs)
                              <?php $tex2 = $langs->lang_prefix.'_coupon_description' ?>
                     <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Desc')}} in {{$langs->lang_name}}<sup>*</sup></label>
                      <input type="text" class="typeahead form-control" id="exampleInputName1" name="{{$tex2}}" value="{{$coupon->$tex2}}" required>
                    </div>
                    @endforeach
                   
                   <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Start_Date')}}</label>
                      <input type="date" class="form-control" id="exampleInputName1" value="{{date('Y-m-d', strtotime($coupon->start_date))}}" name="valid_to" placeholder="">
                    </div> 
            
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.End_Date')}}</label>
                      <input type="date" class="form-control" id="exampleInputName1" value="{{date('Y-m-d', strtotime($coupon->end_date))}}" name="valid_from" placeholder="">
                    </div>
                    
                 <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Cart_Value')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$coupon->cart_value}}" name="cart_value" placeholder="Min Cart Value">
                    </div> 
                    
                    <div class="form-group">
                      <label for="cod">{{ __('keywords.Disc_Value')}}</label>
                      <select class="form-control" name="coupon_type" value="{{$coupon->type}}">
                          <option value="percentage" @if($coupon->type == 'percentage' || $coupon->type == 'Percentage' ||$coupon->type == 'PERCENTAGE') selected @endif>{{ __('keywords.Percentage')}}</option>
                      <option value="price" @if($coupon->type == 'price'|| $coupon->type == 'Price' ||$coupon->type == 'PRICE') selected @endif>{{ __('keywords.Price')}}</option>
                      </select><br>
                      
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$coupon->amount}}" name="coupon_discount" placeholder="Enter Amount">
                    </div>
            
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.User_Restrs')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$coupon->uses_restriction}}" name="restriction" placeholder="How Many times single user Apply this coupon ?">
                    </div>
                    
                    <button type="submit" class="btn btn-success mr-2">{{ __('keywords.Submit')}}</button>
                
                     <a href="{{route('couponlist')}}" class="btn btn-light">{{ __('keywords.Cancel')}}</a>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-md-2">
		  </div>
     
          </div>
        </div>
       </div> 
@endsection

@section('postload-section')
<script>
	document.multiselect('#testSelect1')
		.setCheckBoxClick("checkboxAll", function(target, args) {
			console.log("Checkbox 'Select All' was clicked and got value ", args.checked);
		})
		.setCheckBoxClick("1", function(target, args) {
			console.log("Checkbox for item with value '1' was clicked and got value ", args.checked);
		});

	function enable() {
		document.multiselect('#testSelect1').setIsEnabled(true);
	}

	function disable() {
		document.multiselect('#testSelect1').setIsEnabled(false);
	}
</script>
<script type="text/javascript">
        	$(document).ready(function(){
        	
                $(".des_price").hide();
                
        		$(".img").on('change', function(){
        	        $(".des_price").show();
        			
        	});
        	});
</script>

@endsection