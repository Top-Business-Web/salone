@extends('vendor.layout.app')

@section ('content')
<div class="content-wrapper">
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add staff</h4>
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
                  <form class="forms-sample" action="{{route('AddNewstaff')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
              
                    <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Staff_Name')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="staff_name" placeholder="Enter {{ __('keywords.Staff_Name')}}">
                    </div>
                     <div class="form-group">
                      <label>{{ __('keywords.Staff_Img')}}</label>  
                      
                      <div class="input-group col-xs-12">
                      <input type="file" name="staff_image"  class="file-upload-default">                        
                        </div>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Staff_Desc')}}</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="staff_description" placeholder="Enter {{ __('keywords.Staff_Desc')}}">
                    </div>
                      @foreach($lang as $langs)
                        <?php $tex = $langs->lang_prefix.'_staff_description' ?>
                     <div class="form-group">
                      <label for="exampleInputName1">{{ __('keywords.Staff_Desc')}} in {{$langs->lang_name}}<sup>*</sup></label>
                      <input type="text" class="typeahead form-control" id="exampleInputName1" name="{{$tex}}" placeholder="Staff Description in {{$langs->lang_name}}" required>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-success mr-2">{{ __('keywords.Submit')}}</button>
                
                     <a href="{{route('staff')}}" class="btn btn-light">{{ __('keywords.Cancel')}}</a>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-md-2">
		  </div>
     
          </div>
        </div>
       </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
        	$(document).ready(function(){
        	
                $(".des_price").hide();
                
        		$(".img").on('change', function(){
        	        $(".des_price").show();
        			
        	});
        	});
</script>

@endsection