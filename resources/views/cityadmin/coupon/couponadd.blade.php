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
                  <h4 class="card-title">{{ __('keywords.Add_Coupon')}}</h4>
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
                  <form class="forms-sample" action="{{route('addnewcoupon')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}


                      <div class="form-group">
                    <label for="testSelect1">{{ __('keywords.Choose_Vendor')}}</label><br>
                  
                     <select id="testSelect1" class="mdb-select colorful-select dropdown-primary md-form" multiple searchable="Search here.." name="vendor_id[]" aria-placeholder="Choose your vendor" required>
                      {{-- <option value="" disabled style="background: #f1f1f1;">Choose your vendor</option> --}}
                       @foreach($vendors as $vendor)
		          	<option value="{{$vendor->vendor_id}}">{{$vendor->vendor_name}}</option>
		              @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Name')}}<sup>*</sup></label>
                      <input type="text" class="form-control" id="exampleInputName1" name="coupon_name" placeholder="Enter product name">
                    </div>
                       @foreach($lang as $langs)
                              <?php $tex = $langs->lang_prefix.'_coupon_name' ?>
                     <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Name')}} in {{$langs->lang_name}}<sup>*</sup></label>
                      <input type="text" class="typeahead form-control" id="exampleInputName1" name="{{$tex}}" placeholder="{{ __('keywords.Coupon_Name')}} in {{$langs->lang_name}}" required>
                    </div>
                    @endforeach
                    
                
                <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Code')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="coupon_code" maxlength="6" placeholder="Coupon Code">
                    </div>
                   
                 <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Desc')}} </label>
                      <input type="text" class="form-control" id="exampleInputName1" name="coupon_desc" placeholder="{{ __('keywords.Coupon_Desc')}} ">
                    </div>  
                     @foreach($lang as $langs)
                              <?php $tex2 = $langs->lang_prefix.'_coupon_description' ?>
                     <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Coupon_Desc')}} in {{$langs->lang_name}}<sup>*</sup></label>
                      <input type="text" class="typeahead form-control" id="exampleInputName1" name="{{$tex2}}" placeholder="Coupon Description in {{$langs->lang_name}}" required>
                    </div>
                    @endforeach
                   
                   <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Start_Date')}}</label>
                      <input type="date" class="form-control" id="exampleInputName1" name="valid_to" placeholder="">
                    </div> 
            
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.End_Date')}}</label>
                      <input type="date" class="form-control" id="exampleInputName1" name="valid_from" placeholder="">
                    </div>
                    
                 <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Cart_Value')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="cart_value" placeholder="Min Cart Value">
                    </div> 
                    
                    <div class="form-group">
                      <label for="cod">{{ __('keywords.Disc_Value')}}</label>
                      <select class="form-control" name="coupon_type">
                          <option value="">---Select---</option>
                          <option value="percentage">{{ __('keywords.Percentage')}}</option>
                          <option value="price">{{ __('keywords.Price')}}</option>
                      </select><br>
                      
                      <input type="text" class="form-control" id="exampleInputName1" name="coupon_discount" placeholder="Enter Amount">
                    </div>
            
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.User_Restrs')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="restriction" placeholder="How Many times single user Apply this coupon ?">
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