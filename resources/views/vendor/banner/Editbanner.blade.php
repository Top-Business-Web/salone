@extends('vendor.layout.app')

@section ('content')
<div class="content-wrapper">
          <div class="row">
		  <div class="col-md-2">
		  </div>
            
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Banner</h4>
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
                  <form class="forms-sample" action="{{route('Updatebannervendor',$banner->banner_id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
             
                    <div class="form-group">
                      <label for="exampleInputName1">banner Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$banner->banner_name}}" name="banner_name" placeholder="Enter banner Name">
                    </div>
                     <div class="form-group" style="display:none;">
                      <label for="exampleInputName1">Keyword</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" name="banner_keyword" value="skhdkhfdjs">
                    </div>
                     <div class="form-group">
                      <label class="image-hover">banner image <img src="{{url($banner->banner_image)}}"  style="width: 21px;"></label>
                      <input type="hidden" name="old_banner_image" value="{{$banner->banner_image}}" class="file-upload-default">
                      <div class="input-group col-xs-12">
                      <input type="file" name="banner_image" class="file-upload-default">
                      </div>
                    </div>
                      
                    <button type="submit" class="btn btn-success mr-2">{{ __('keywords.Submit')}}</button>
                 
                     <a href="{{route('bannervendor')}}" class="btn btn-light">{{ __('keywords.Cancel')}}</a>
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