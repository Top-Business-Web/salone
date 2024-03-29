@extends('cityadmin.layout.app')

@section ('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add banner</h4>
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
                  <form class="forms-sample" action="{{route('addadminbanner')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                    <div class="form-group">
                      <label for="exampleInputName1">Vendor Name</label>
					  <select class="form-control" name="vendor_id" required>
						<option value="">Select Vendor Name</option>
						@foreach($vendors as $vendor)
						<option value="{{$vendor->vendor_id}}">{{$vendor->vendor_name}}</option>
						@endforeach
					  </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Banner Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="banner_name" placeholder="Enter Banner Name">
                    </div>

                    <div class="form-group">
						<label>Banner Image</label>  
						<div class="input-group col-xs-12">
							<input type="file" name="banner_image" accept="image/*" class="file-upload-default">                        
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mr-2">{{ __('keywords.Submit')}}</button>

                     <a href="{{route('adminbanner')}}" class="btn btn-light">Back</a>
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
<script type="text/javascript">
        	$(document).ready(function(){
        	
                $(".des_price").hide();
                
        		$(".img").on('change', function(){
        	        $(".des_price").show();
        			
        	});
        	});
</script>

@endsection